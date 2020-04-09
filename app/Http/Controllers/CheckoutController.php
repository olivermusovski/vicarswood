<?php

namespace App\Http\Controllers;

use App;
use App\Address;
use App\Country;
use App\Order;
use App\OrderLine;
use App\OrderOption;
use App\Product;
use App\ProductOption;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $order
     * @return \Illuminate\Http\Response
     */
    public function showShippingForm($order)
    {
        $order = Order::find($order);
        $countries = DB::table("countries")->pluck("name","id");
        return view('checkout.shipping')->withOrder($order)->withCountries($countries);
    }

    /**
     * Display a listing of the resource.
     *
     * @param int $order
     * @return \Illuminate\Http\Response
     */
    public function showReview($order)
    {
        $order = Order::find($order);
        return view('checkout.review')->withOrder($order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(session()->get('order_id') != NULL) {
            $order_id = session()->get('order_id');
            self::removeOrderLines($order_id);
            self::addOrderLines($order_id);
            return redirect()->route('checkout.shipping', ['order' => $order_id]);
        } else {

            // store order
            $order = new Order;
            $order->OrderStatus = 'Started';
            $order->OrdLanguage = 'EN';
            $order->user_id = auth()->user() ? auth()->user()->id : null;
            $order->UserEmail = auth()->user() ? auth()->user()->email : null;
            $order->UpdatedBy = 1;
            $order->DateOrdered = date('Y-m-d h:i:s');
            $order->save();

            self::addOrderLines($order->id);

            //$this->calculateShipping($shipping, $order);
            //$this->calculateTaxes($shipping, $order);
            session()->put('order_id', $order->id);

            
            return redirect()->route('checkout.shipping', ['order' => $order->id]);
        }
        //return redirect()->route('checkout.review', ['order' => $order->id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   int $id
     * @return \Illuminate\Http\Response
     */
    public function addOrderLines($id) {
        $order = Order::find($id);

        //store order lines
        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }

        foreach (\Cart::getContent() as $item) {

            //get product
            $product = Product::find($item->attributes['id']);

            // create new order line
            $orderLine = new OrderLine;
            $orderLine->order_id = $id;
            $orderLine->LineTypeID = 1;
            $orderLine->BaseNBR = $product->BaseNBR;
            $partNumber = $product->BaseNBR;
            $partDescription = $product->ProdDesc.' ('.$product->ProdName.") \n";
            $orderLine->BasePrice = $product->BasePrice;
            $partPrice = $product->BasePrice;
            $orderLine->BaseCost = $product->getCost();
            $partCost = $product->getCost();
            $orderLine->Qty = $item->quantity;
            $orderLine->ProductDesc = $item->attributes->desc;
            $orderLine->save();

            //store order line options
            foreach ($item->conditions as $condition) {

                $option = ProductOption::find($condition->getAttributes()['id']);

                $lineOption = new OrderOption;
                $lineOption->orderLine_id = $orderLine->id;
                $lineOption->OptCode = $option->OptCode;
                $lineOption->OptPosition = $option->OptPosition;
                $partNumber .= '-'.$option->OptCode.$option->OptPosition;
                $partDescription .= 'OPTION '.$option->OptCode.$option->OptPosition.' - '.$option->OptName.' $'.$condition->getValue()." \n";
                $lineOption->PositionName = $option->PositionName;
                $lineOption->OptName = $condition->getName();
                $lineOption->OptPrice = $condition->getValue();
                $lineOption->OptCost = $option->getCost();
                $partPrice += $condition->getValue();
                $partCost += $option->getCost();
                $lineOption->save();

            }

            $orderLine->PartNBR = $partNumber;
            $orderLine->PartDesc = $partDescription;
            $orderLine->PartPrice = $partPrice;
            $orderLine->ExtPartPrice = $partPrice * $item->quantity;
            $orderLine->PartCost = $partCost;
            $orderLine->ExtPartCost = $partCost * $item->quantity;
            $orderLine->SalesTax = 1;
            $orderLine->save();
        }

        // add promo line item
        $promo = \Cart::getCondition('promo');
        if($promo){
            $attributes = $promo->getAttributes();
            $discount = $attributes['discount'];
            $description = $attributes['description'];
            $discountAmount = $discount * $order->getSubTotal() * -1;
            
            $orderLine = new OrderLine;
            $orderLine->order_id = $order->id;
            $orderLine->LineTypeID = 6;
            $orderLine->BaseNBR = null;
            $orderLine->BasePrice = 0;
            $orderLine->BaseCost = 0;
            $orderLine->Qty = 0;
            $orderLine->Taxable = 0;
            $orderLine->ProductDesc = 'Promo';
            $orderLine->PartDesc = $description;
            $orderLine->PartPrice = $discountAmount;
            $orderLine->ExtPartPrice = $discountAmount;
            $orderLine->PartCost = 0;
            $orderLine->ExtPartCost = 0;
            $orderLine->SalesTax = 0;
            $orderLine->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removeOrderLines($id) {

        $order = Order::find($id);

        foreach ($order->lines as $orderLine) {
            $orderLine->delete();
        }
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeShippingAddress(Request $request)
    {
        //dd($request);
        //dd(session());
        //store shipping address
        $shipping = new Address;
        //$shipping->UserEmail = $request->UserEmailShip;
        $shipping->AddressType = 'ShipTo';
        $shipping->Attention = $request->AttentionShip;
        $shipping->Street1 = $request->Street1Ship;
        $shipping->City = $request->CityShip;
        $shipping->Province = $request->ProvinceShip;
        $shipping->PostalCode = $request->PostalCodeShip;
        $shipping->PhoneNumber = $request->PhoneNumberShip;
        $shipping->save();

        //store billing address
        /*
        $billing = new Address;
        $billing->UserEmail = $request->UserEmailBill;
        $billing->AddressType = 'BillTo';
        $billing->Attention = $request->AttentionBill;
        $billing->Street1 = $request->Street1Bill;
        $billing->City = $request->CityBill;
        $billing->Province = $request->ProvinceBill;
        $billing->PostalCode = $request->PostalCodeBill;
        $billing->PhoneNumber = $request->PhoneNumberBill;
        $billing->save();
        */

        //attach addresses to order
        $order = Order::find($request->order_id);
        //$order->BillToId = $billing->id;
        $order->ShipToId = $shipping->id;
        $order->save();

        $this->calculateShipping($shipping, $order);
        $this->calculateTaxes($shipping, $order);

        return redirect()->route('checkout.review', ['order' => $order->id]);
    }

    public function calculateShipping(Address $shipping, Order $order)
    {
        //calculate shipping
        $price = 20;

        $orderLine = new OrderLine;
        $orderLine->order_id = $order->id;
        $orderLine->LineTypeID = 5;
        $orderLine->BaseNBR = null;
        $orderLine->BasePrice = 0;
        $orderLine->BaseCost = 0;
        $orderLine->Qty = 0;
        $orderLine->Taxable = 0;
        $orderLine->ProductDesc = 'Freight';
        $orderLine->PartDesc = 'Shipping & Handling';
        $orderLine->PartPrice = $price;
        $orderLine->ExtPartPrice = $price;
        $orderLine->PartCost = 0;
        $orderLine->ExtPartCost = 0;
        $orderLine->SalesTax = 0;
        $orderLine->save();

        return;
    }

    public function calculateTaxes(Address $shipping, Order $order)
    {
        //calculate tax
        $price = 102.67;

        $orderLine = new OrderLine;
        $orderLine->order_id = $order->id;
        $orderLine->LineTypeID = 4;
        $orderLine->BaseNBR = null;
        $orderLine->BasePrice = 0;
        $orderLine->BaseCost = 0;
        $orderLine->Qty = 0;
        $orderLine->Taxable = 0;
        $orderLine->ProductDesc = 'Sales Tax';
        $orderLine->PartDesc = 'Sales Tax';
        $orderLine->PartPrice = $price;
        $orderLine->ExtPartPrice = $price;
        $orderLine->PartCost = 0;
        $orderLine->ExtPartCost = 0;
        $orderLine->SalesTax = 1;
        $orderLine->save();

        return;
    }

    /**
     * Complete the order
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function completeOrder(Request $request)
    {
        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }

        // dd(\Cart::getTotal());
        // -----------------------------------
        // Set alert messages based on locale
        // -----------------------------------
        
        if (App::isLocale('en')) {
            $successMessage = "Your order has been entered!";
        }

        if (App::isLocale('es')) {
            $successMessage = "Su pedido ha sido ingresado!"; 
        }

        // -----------------------------------
        // -----------------------------------

        // stripe process charge
        try {
            $charge = Stripe::charges()->create([
                'amount' => \Cart::getTotal(),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                // 'metadata' => [
                // ]
            ]);
        } catch (Exception $e) {

        }
        
        //find order
        $order = Order::find($request->order_id);

        //store billing address
        $billing = new Address;
        $billing->AddressType = 'BillTo';
        $billing->Attention = $request->AttentionBill;
        $billing->Street1 = $request->Street1Bill;
        $billing->City = $request->CityBill;
        $billing->Province = $request->ProvinceBill;
        $billing->PostalCode = $request->PostalCodeBill;
        $billing->PhoneNumber = $request->PhoneNumberBill;
        $billing->save();

        //apply updates to order
        $order->BillToId = $billing->id;
        $order->OrderStatus = 'Submitted';
        $order->save();
        
        

        \Cart::clear();
                
        return redirect()->route('confirmation')->with('success_message', $successMessage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

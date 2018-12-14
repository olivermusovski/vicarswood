<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderLine;
use App\OrderOption;
use App\Product;
use App\ProductOption;
use App\Address;

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
    public function showAddressForm()
    {
        //$order = Order::find($order);
        return view('checkout.address');//->withOrder($order);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAddress(Request $request)
    {
        //dd($request);

        //store shipping address
        $shipping = new Address;
        $shipping->UserEmail = $request->UserEmailShip;
        $shipping->AddressType = 'ShipTo';
        $shipping->Attention = $request->AttentionShip;
        $shipping->Street1 = $request->Street1Ship;
        $shipping->City = $request->CityShip;
        $shipping->Province = $request->ProvinceShip;
        $shipping->PostalCode = $request->PostalCodeShip;
        $shipping->PhoneNumber = $request->PhoneNumberShip;
        $shipping->save();

        //store billing address
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

        //attach addresses to order
        $order = Order::find($request->order_id);
        $order->BillToId = $billing->id;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }

        // store order
        $order = new Order;
        $order->OrderStatus = 'Started';
        $order->OrdLanguage = 'EN';
        $order->user_id = auth()->user() ? auth()->user()->id : null;
        $order->UserEmail = auth()->user() ? auth()->user()->email : null;
        $order->UpdatedBy = 1;
        $order->DateOrdered = date('Y-m-d h:i:s');
        $order->save();

        //store order lines
        foreach (\Cart::getContent() as $item) {

            //get product
            $product = Product::find($item->id);

            // create new order line
            $orderLine = new OrderLine;
            $orderLine->order_id = $order->id;
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

        \Cart::clear();

        //return view('checkout.address')->withOrder($order);
        return redirect()->route('checkout.address', ['order' => $order->id]);

    }

    /**
     * Complete the order
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function completeOrder(Request $request)
    {
        //dd($request);
        $order = Order::find($request->order_id);
        $order->OrderStatus = 'Submitted';
        $order->save();
        
        return redirect()->route('confirmation')->with('success_message', 'You order has been entered!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

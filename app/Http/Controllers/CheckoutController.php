<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderLine;
use App\OrderOption;
use App\Product;
use App\ProductOption;

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
    public function store(Request $request)
    {

        // store order
        $order = new Order;
        $order->OrderStatus = 'Order';
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
            $orderLine->save();
        }

        return redirect()->route('confirmation')->with('success_message', 'Thank you for your order!');

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Coupon;
use App\Order;
use App\OrderLine;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        $order = Order::find($request->order_id);
        $alreadyHasCoupon = false;
        
        // Check to see if the coupon code is valid
        if(!$coupon) {
            return redirect()->route('checkout.review', ['order' => $order->id])->withErrors('Invalid coupon code. Please try again.');
        }

        // Check to see if the coupon has expired
        if($coupon->end_date < date("Y-m-d")) {
            return redirect()->route('checkout.review', ['order' => $order->id])->withErrors('Coupon code has expired.');
        }

        // Run through the order lines and see if there is already a coupon code applied to the order
        foreach ($order->lines as $orderLine) {
            if($orderLine->LineTypeID == 6) {
                $alreadyHasCoupon = true;
            }
        }

        // Check to see if coupon code is already applied
        if($alreadyHasCoupon) {
            return redirect()->route('checkout.review', ['order' => $order->id])->withErrors('You are already using a coupon code. Only one coupon can be applied.');
        }

        // If none of those cases then add a coupon code to the order
        $discount = $coupon->discount($order->getSubTotal());
        $orderLine = new OrderLine;
        $orderLine->order_id = $order->id;
        $orderLine->LineTypeID = 6;
        $orderLine->BaseNBR = null;
        $orderLine->BasePrice = 0;
        $orderLine->BaseCost = 0;
        $orderLine->Qty = 0;
        $orderLine->Taxable = 0;
        $orderLine->ProductDesc = 'Coupon';
        $orderLine->PartDesc = $coupon->code;
        $orderLine->PartPrice = $discount;
        $orderLine->ExtPartPrice = $discount;
        $orderLine->PartCost = 0;
        $orderLine->ExtPartCost = 0;
        $orderLine->SalesTax = 0;
        $orderLine->save();

        return redirect()->route('checkout.review', ['order' => $order->id])->with('success_message', 'Coupon has been applied!');
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
        $orderLine = OrderLine::find($id);
        $order = Order::find($orderLine->order_id);
        $orderLine->delete();

        return redirect()->route('checkout.review', ['order' => $order->id])->with('success_message', 'Coupon has been removed!');
    }
}

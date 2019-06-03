<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Order;
use App\OrderLine;
use App\PromoHistory;
use App\PromoOffer;

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
        $promo = PromoHistory::where('PromoCode', $request->promo_code)->first();
        $order = Order::find($request->order_id);
        $alreadyHasCoupon = false;
        $userHasOffer = false;

        if(!auth()->user()) {
           return redirect()->route('checkout.review', ['order' => $order->id])->withErrors('Must be logged in to apply promotion.'); 
        }
        
        // Check to see if the promo code is valid
        if(!$promo) {
            return redirect()->route('checkout.review', ['order' => $order->id])->withErrors('Invalid promo code. Please try again.');
        }

        // Check to see if the promo has launched
        if(!$promo->Launch) {
            return redirect()->route('checkout.review', ['order' => $order->id])->withErrors('Promotion has not started.');
        }

        // Check to see if the promo has expired or not started
        if(date("Y-m-d") < $promo->DateStarted || date("Y-m-d") > $promo->DateClosed) {
            return redirect()->route('checkout.review', ['order' => $order->id])->withErrors('Promotion has expired.');
        }

        // Run through the order lines and see if there is already a promo code applied to the order
        foreach ($order->lines as $orderLine) {
            if($orderLine->LineTypeID == 6) {
                $alreadyHasCoupon = true;
            }
        }

        // Check to see if promo code is already applied
        if($alreadyHasCoupon) {
            return redirect()->route('checkout.review', ['order' => $order->id])->withErrors('You are already using a promo code. Only one promo can be applied.');
        }

        // Run through the promo offers to see if user has offer
        foreach($promo->offers as $offer) {
            if(auth()->user()->id == $offer->user_id) {
                // Check if user has already used the promo code before
                if($offer->OfferUsed) {
                    return redirect()->route('checkout.review', ['order' => $order->id])->withErrors('Promo code has already been used. Cannot use promo code more than once.');
                } else {
                    $userHasOffer = true;
                    $offer->OfferUsed = date('Y-m-d H:i:s');
                    $offer->save();
                }
            }
        }

        if(!$userHasOffer) {
            return redirect()->route('checkout.review', ['order' => $order->id])->withErrors('Promo code offer invalid! Please try again.');
        }

        // If none of those cases then add a promo code to the order
        $discount = $promo->Discount * $order->getSubTotal() * -1;
        $orderLine = new OrderLine;
        $orderLine->order_id = $order->id;
        $orderLine->LineTypeID = 6;
        $orderLine->BaseNBR = null;
        $orderLine->BasePrice = 0;
        $orderLine->BaseCost = 0;
        $orderLine->Qty = 0;
        $orderLine->Taxable = 0;
        $orderLine->ProductDesc = 'Promo';
        $orderLine->PartDesc = $promo->PromoCode;
        $orderLine->PartPrice = $discount;
        $orderLine->ExtPartPrice = $discount;
        $orderLine->PartCost = 0;
        $orderLine->ExtPartCost = 0;
        $orderLine->SalesTax = 0;
        $orderLine->save();

        return redirect()->route('checkout.review', ['order' => $order->id])->with('success_message', 'Coupon has been applied!');
    }

    /**
     * Store a newly created resource in storage from the cart rather than from the checkout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeFromCart(Request $request)
    {
        $promo = PromoHistory::where('PromoCode', $request->promo_code)->first();
        //$order = Order::find($request->order_id);
        $alreadyHasCoupon = false;
        $userHasOffer = false;

        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        } else {
           return redirect()->route('cart.index')->withErrors('Must be logged in to apply promotion.'); 
        }
        
        // Check to see if the promo code is valid
        if(!$promo) {
            return redirect()->route('cart.index')->withErrors('Invalid promo code. Please try again.');
        }

        // Check to see if the promo has launched
        if(!$promo->Launch) {
            return redirect()->route('cart.index')->withErrors('Promotion has not started.');
        }

        // Check to see if the promo has expired or not started
        if(date("Y-m-d") < $promo->DateStarted || date("Y-m-d") > $promo->DateClosed) {
            return redirect()->route('cart.index')->withErrors('Promotion has expired.');
        }

        // Run through the order lines and see if there is already a promo code applied to the order
        // foreach ($order->lines as $orderLine) {
        //     if($orderLine->LineTypeID == 6) {
        //         $alreadyHasCoupon = true;
        //     }
        // }
        
        $condition = \Cart::getCondition('promo');
        if($condition) {
            $alreadyHasCoupon = true;
        }


        // Check to see if promo code is already applied
        if($alreadyHasCoupon) {
            return redirect()->route('cart.index')->withErrors('You are already using a promo code. Only one promo can be applied.');
        }

        // Run through the promo offers to see if user has offer
        foreach($promo->offers as $offer) {
            if(auth()->user()->id == $offer->user_id) {
                // Check if user has already used the promo code before
                if($offer->OfferUsed) {
                    return redirect()->route('cart.index')->withErrors('Promo code has already been used. Cannot use promo code more than once.');
                } else {
                    $userHasOffer = true;
                    $offer->OfferUsed = date('Y-m-d H:i:s');
                    $offer->save();
                }
            }
        }

        if(!$userHasOffer) {
            return redirect()->route('cart.index')->withErrors('Promo code offer invalid! Please try again.');
        }

        // If none of those cases then add a promo code to the order
        $discount = $promo->Discount * -100;
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'promo',
            'type' => 'discount',
            'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
            'value' => $discount.'%',
            'attributes' => array( // attributes field is optional
                'description' => $promo->PromoCode,
                'discount' => $promo->Discount
            )
        ));

        \Cart::condition($condition);

        return redirect()->route('cart.index')->with('success_message', 'Coupon has been applied!');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyFromCart()
    {
        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }

        \Cart::removeCartCondition('promo');

        return redirect()->route('cart.index')->with('success_message', 'Coupon has been removed!');
    }
}

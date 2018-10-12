<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\CartCondition;
use App\ProductOption;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index');
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
        
        if(\Cart::get($request->id)) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart.');
        }

        else {

            foreach ($request->options as $option) {
                $productOption = ProductOption::find($option);
                $itemConditions[] = new CartCondition([
                    'name' => $productOption->OptName,
                    'type' => 'option',
                    'value' => $productOption->OptPrice,
                    'attributes' => [
                        'id' => $productOption->id
                    ]
                ]);
            }

            \Cart::add([
                'id' => $request->id, 
                'name' => $request->name, 
                'price' => $request->price, 
                'quantity' => 1, 
                'attributes' => [
                    'desc' => $request->desc
                ],
                'conditions' => $itemConditions
            ]);

            return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');

        }
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
        \Cart::remove($id);

        return back()->with('success_message', 'Item has been removed.');
    }
}

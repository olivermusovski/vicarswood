<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }

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
        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }
        
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
        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }

        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if($validator->fails()) {
            session()->flash('errors', 'Quantity must be between 1 and 5');
            return response()->json(['success' => false], 400);
        }


        \Cart::update($id, array(
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ],
        ));

        session()->flash('success_message', 'Quantity was updated successfully!');

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }
        
        \Cart::remove($id);

        return back()->with('success_message', 'Item has been removed.');
    }
}

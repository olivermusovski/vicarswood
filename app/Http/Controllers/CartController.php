<?php

namespace App\Http\Controllers;

use App;
use App\Product;
use App\ProductOption;
use Darryldecode\Cart\CartCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }

        if ($request->status == 1) {
            if (App::isLocale('en')) {
                $addedToCart = "Item was added to your cart!";
            }

            if (App::isLocale('es')) {
                $addedToCart = "¡El artículo fue añadido a su carrito!";
            }

            return redirect()->route('cart.index')->with('success_message', $addedToCart);
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
        //dd($request);
        // -----------------------------------
        // Set alert messages based on locale
        // -----------------------------------
        
        if (App::isLocale('en')) {
            $alreadyInCart = "Item is already in your cart.";
            $addedToCart = "Item was added to your cart!";
        }

        if (App::isLocale('es')) {
            $alreadyInCart = "El artículo ya está en su carrito.";
            $addedToCart = "¡El artículo fue añadido a su carrito!";
        }

        // -----------------------------------
        // -----------------------------------
        
        $product = Product::find($request->productId);

        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }
        
        // if(\Cart::get($request->productId)) {
        //     return redirect()->route('cart.index')->with('success_message', $alreadyInCart);
        // }

        

            // Set finish option
            $finishOption = ProductOption::find($request->finishOptionId);
            $itemConditions[] = new CartCondition([
                'name' => $finishOption->OptName,
                'type' => 'option',
                'value' => $finishOption->OptPrice,
                'attributes' => [
                    'id' => $finishOption->id
                ]
            ]);

            // Set hardware option
            $hardwareOption = ProductOption::find($request->hardwareOptionId);
            $itemConditions[] = new CartCondition([
                'name' => $hardwareOption->OptName,
                'type' => 'option',
                'value' => $hardwareOption->OptPrice,
                'attributes' => [
                    'id' => $hardwareOption->id
                ]
            ]);

            // Set hardware option
            $drawerOption = ProductOption::find($request->drawerOptionId);
            $itemConditions[] = new CartCondition([
                'name' => $drawerOption->OptName,
                'type' => 'option',
                'value' => $drawerOption->OptPrice,
                'attributes' => [
                    'id' => $drawerOption->id
                ]
            ]);
            
            //dd($itemConditions);

            \Cart::add([
                'id' => $product->id + rand(0, 100), 
                'name' => $product->ProdName, 
                'price' => $product->BasePrice, 
                'quantity' => 1, 
                'attributes' => [
                    'desc' => $product->ProdDesc,
                    'id' => $product->id,
                    'imagepath' => $product->detail->ObjectFile
                ],
                'conditions' => $itemConditions
            ]);

            return ['success' => true];
            //return redirect()->route('cart.index')->with('success_message', $addedToCart);

        
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
        // -----------------------------------
        // Set alert messages based on locale
        // -----------------------------------
        
        if (App::isLocale('en')) {
            $quantityError = "Quantity must be between 1 and 5";
            $quantitySuccess = "Quantity was updated successfully!";
        }

        if (App::isLocale('es')) {
            $quantityError = "La cantidad debe estar entre 1 y 5";
            $quantitySuccess = "¡Cantidad se actualizó con éxito!";
        }

        // -----------------------------------
        // -----------------------------------
        
        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }

        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if($validator->fails()) {
            session()->flash('errors', $quantityError);
            return response()->json(['success' => false], 400);
        }


        \Cart::update($id, array(
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ],
        ));

        session()->flash('success_message', $quantitySuccess);

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
        // -----------------------------------
        // Set alert messages based on locale
        // -----------------------------------
        
        if (App::isLocale('en')) {
            $itemRemoved = "Item has been removed.";
        }

        if (App::isLocale('es')) {
            $itemRemoved = "El artículo ha sido eliminado."; 
        }

        // -----------------------------------
        // -----------------------------------
        
        if(auth()->user()) {
            \Cart::session(auth()->user()->id);
        }
        
        \Cart::remove($id);

        return back()->with('success_message', $itemRemoved);
    } 
}

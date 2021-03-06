<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductOption;
use Illuminate\Http\Request;

class ProductOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = Product::find($request->productId);
        $option = ProductOption::where('BaseNBR', $product->BaseNBR)
        ->where('OptPosition', $request->code)->first();
        //dd($option);
        //$products = Product::all();
        return $option->id;
        //return view('products.index')->withProducts($products);
    }

    // /**
    //  * Display a listing of the resource.
    //  * 
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function indexHardware(Request $request)
    // {
    //     $product = Product::find($request->productId);
    //     $option = ProductOption::where('BaseNBR', $product->BaseNBR)
    //     ->where('OptPosition', $request->hardwareSelected)->first();
    //     //dd($option);
    //     //$products = Product::all();
    //     return $option->id;
    //     //return view('products.index')->withProducts($products);
    // }

    // /**
    //  * Display a listing of the resource.
    //  * 
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function indexDrawers(Request $request)
    // {
    //     $product = Product::find($request->productId);
    //     $option = ProductOption::where('BaseNBR', $product->BaseNBR)
    //     ->where('OptPosition', $request->drawerSelected)->first();
    //     //dd($option);
    //     //$products = Product::all();
    //     return $option->id;
    //     //return view('products.index')->withProducts($products);
    // }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$product = Product::find($id);

        //return view('products.show')->withProduct($product);
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

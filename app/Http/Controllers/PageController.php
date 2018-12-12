<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductOption;

class PageController extends Controller
{
    public function index() {
        return view('pages.welcome');
    }
    
    public function about() {
        return view('pages.about');
    }

    public function privacyPolicy() {
        return view('pages.privacy_policy');
    }

    public function termsAndConditions() {
        return view('pages.terms_and_conditions');
    }

    public function careers() {
        return view('pages.careers');
    }

    public function confirmation() {
        if(! session()->has('success_message')) {
            return redirect('/');
        }
        
        return view('pages.confirmation');
    }

    public function test() {
    	
    	$product = Product::find(1);

        $grouped = $product->options->groupBy('PositionName');

        return $grouped->toArray();
    	/*
    	foreach ($product->options as $option) {
    		echo $option->id;
		}
        */

    }

    
}

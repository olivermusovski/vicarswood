<?php

namespace App\Http\Controllers;

use App\Address;
use App\Product;
use App\ProductOption;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $leadTimeInDays = Address::where('AddressType', 'Company')->first()->LeadTime;
        $leadTimeInWeeks = intval($leadTimeInDays / 7);
        return view('pages.welcome')->withLeadTimeInWeeks($leadTimeInWeeks);
    }
    
    public function about() {
        $address = Address::where('AddressType', 'Company')->first();
        return view('pages.about')->withAddress($address);
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
    	
    	$order = \App\Order::find(14);

        return $order->shippingAddress;

    }

    
}

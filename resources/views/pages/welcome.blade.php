@extends('app')

@section('stylesheets')
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
@stop

@section('title')

@section('content')

    <div class="conainter-fluid wallpaper-home">
        <div class="container">
            <div class="row py-5 px-3 align-items-center">
                <div class="col-12 col-md-8 col-xl-6">
                    <div class="row">
                        <h1 class="display-1" style="font-family: 'Montserrat', sans-serif">Vicarswood</h1>
                    </div>
                    <div class="row">
                        <h2 class="text-light font-weight-bolder">{{ __("Hand-made, high quality furniture") }}</h2>    
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-6 mt-4 mt-md-0">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-xl-end">
                            <a class="btn btn-light btn-lg rounded-full" href="{{ route('products.index') }}">{{ __('Products') }}</a>    
                        </div>
                        <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-xl-start">
                            <a class="btn btn-secondary btn-lg rounded-full mt-3 mt-lg-0 ml-xl-4" href="{{ url('/about') }}">{{ __('About') }}</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
            
    <div class="container">
        <div class="row my-5 px-3">
            <h5 class="text-muted">
                {{ __("Vicarswood designs and sells desks and chests of drawers.  They are solid.   Built-to-order from pine, they are dyed rather than stained.  The deeper finish lasts longer and produces combinations of color to suit the most unique personality.") }}
                <br>
                <br>
                {{ __("Open the Product Catalog or peruse the products on-line.  The Penzance Chest, a.k.a. the Smuggler’s Chest, has been a favorite for its specialty.  Like its catalog counterparts, it is built by hand in Las Vegas, but this one was conceived after a horrid home invasion.  Precious items stored behind its false back are not easily found, even after being knocked about.  Vicarswood stands for enduring style and construction.") }}
                <br>
                <br>
                {{ __("Current lead time is approximately XX weeks.  Orders are custom and are NCNR (non-cancellable, nonrefundable)
once Vicarswood has purchased the raw materials.") }}
                <br>
                <br>
                {{ __("For more information, check out our") }} <a href="{{ url('/about') }}">{{ __("About") }} </a> {{ __("page") }}.
            </h5>
        </div>
    </div>
 
 @endsection
 
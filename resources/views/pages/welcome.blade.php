@extends('app')

@section('stylesheets')
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
@stop

@section('title')

@section('content')

    <div class="containter-fluid wallpaper-home">
        <div class="container">
            <div class="row py-5 px-3 align-items-center">
                <div class="col-12 col-md-8 col-xl-6">
                    <div class="row">
                        <img src="{{ asset('images/LogoVicarswood_.png') }}" class="img-fluid mx-auto" alt="">
                    </div>
                    <div class="row mt-4">
                        <h2 class="text-light font-weight-bolder mx-auto">{{ __("Crosslake Pine Furniture") }}</h2>    
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-6 mt-4 mt-md-0">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-xl-end">
                            <a class="btn btn-light btn-lg rounded-full" href="{{ route('products.index') }}">{{ __('Products') }}</a>    
                        </div>
                        <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-xl-start">
                            <a class="btn btn-secondary btn-lg rounded-full mt-3 mt-lg-0 ml-xl-4" href="{{ asset('files/Catalog.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> {{ __('View Catalog') }}</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
            
    <div class="container">
        <div class="row mt-5 px-3">
            <h5 class="text-muted">
                {{ __("Vicarswood designs and sells desks and chests of drawers.  They are solid.   Built-to-order from pine, they are dyed rather than stained.  The deeper finish lasts longer and produces combinations of color to suit the most unique personality.") }}
                <br>
                <br>
                {{ __("Open the Product Catalog or peruse the products on-line.  The Penzance Chest, a.k.a. the Smuggler’s Chest, has been a favorite for its specialty.  Like its catalog counterparts, it is built by hand in Las Vegas, but this one was conceived after a horrid home invasion.  Precious items stored behind its false back are not easily found, even after being knocked about.  Vicarswood stands for enduring style and construction.") }}
            </h5>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row my-4">
            <div class="col-12 col-lg">
                <div class="card shadow">
                    <img src="{{ asset('images/601-ShtImage1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-12 mt-3 col-lg mt-lg-0">
                <div class="card shadow">
                    <img src="{{ asset('images/605-ShtImage1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-12 mt-3 col-lg mt-lg-0">
                <div class="card shadow">
                    <img src="{{ asset('images/609-ShtImage1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-12 mt-3 col-lg mt-lg-0">
                <div class="card shadow">
                    <img src="{{ asset('images/705-ShtImage1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        
    </div>

    <div class="container">
        <div class="row mt-3 mb-5 px-3">
            <h5 class="text-muted">                
                {{ __("Current lead time is approximately") }} {{ $leadTimeInWeeks }} {{ __("weeks.  Orders are custom and are NCNR (non-cancellable, nonrefundable)
    once Vicarswood has purchased the raw materials.") }}
                <br>
                <br>
                {{ __("For more information, check out our") }} <a href="{{ url('/about') }}">{{ __("About") }} </a> {{ __("page") }}.
            </h5>
        </div>
    </div>
 
 @endsection
 
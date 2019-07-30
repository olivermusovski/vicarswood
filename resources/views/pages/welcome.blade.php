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
                        <img src="{{ asset('images/LogoVicarswood_.png') }}" class="img-fluid mx-auto" alt="">
                    </div>
                    <div class="row mt-4">
                        <h2 class="text-light font-weight-bolder mx-auto">{{ __("Hand-made, high quality furniture") }}</h2>    
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-6 mt-4 mt-md-0">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-xl-end">
                            <a class="btn btn-light btn-lg rounded-full" href="{{ route('products.index') }}">{{ __('Products') }}</a>    
                        </div>
                        <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-xl-start">
                            <a class="btn btn-secondary btn-lg rounded-full mt-3 mt-lg-0 ml-xl-4" href="{{ asset('files/Catalog.pdf') }}"><i class="far fa-file-pdf"></i> {{ __('View Catalog') }}</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
            
    <div class="container">
        <div class="row my-5 px-3">
            <h5 class="text-muted">
                {{ __("Welcome to Vicarswood. We are a small workshop offering a choice of craft furniture pieces to add to your home or office. Timber is hand selected as you would expect from high-end manufacturer. However, the difference may be found within its workmanship, design and finishes. We build and finish everything by hand and proudly package all for a safe journey to their next home.") }}
                <br>
                <br>
                {{ __("Our focus continues targeting desks and chests. Products have been a solution to family issues and comfort to its selfish desires. If it were for everybody, Vicarswood, indeed would be a mass manufacturing. But, our customers are limited to those that share an appreciation for unique function and style. We like that.") }}
                <br>
                <br>
                {{ __("Final finishing remains more of an art than a process. It involves seven-coats chemistry and discipline to yield rich depth and natural beauty. It’s important that it is durable as it is beautiful. Selections are many and dyes are available as well. Old and new schools coexist. Our two favorites are the grey and turquoise.") }}
                <br>
                <br>
                {{ __("For more information, check out our") }} <a href="{{ url('/about') }}">{{ __("About") }} </a> {{ __("page") }}.
            </h5>
        </div>
    </div>
 
 @endsection
 
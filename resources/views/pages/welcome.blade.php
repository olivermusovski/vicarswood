@extends('app')

@section('stylesheets')
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
@stop

@section('title')

@section('content')

    <div class="row wallpaper-home w-auto align-items-center">
        <div class="col p-7l">
            <h1 class="display-1" style="font-family: 'Montserrat', sans-serif">Vicarswood</h1>
            <div class="row">
                <div class="col">
                    <h2 class="text-light">Hand-made, high quality furniture</h2>    
                </div>
            </div>
        </div>
        <div class="col p-7r">
            <div class="row justify-content-center">
                <button class="btn btn-light btn-xl rounded-full">Products</button>
                <button class="btn btn-secondary btn-xl rounded-full ml-5">About Us</button>
            </div>
            
        </div>
    </div>
            
    <div class="container">
        <div class="row my-5">
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
 
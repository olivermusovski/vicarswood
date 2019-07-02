@extends('app')

@section('title')

@section('content')
            
    <div class="container">
        <div class="row">
            <img class="img-fluid mx-auto" src="{{ asset('images/home.png') }}" alt="home">
        </div>
        <div class="row mt-5">
            <h4>
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
            </h4>
        </div>

    </div>
 
 @endsection
 
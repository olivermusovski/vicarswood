@extends('app')

@section('title', '| Checkout')

@section('content')

	<div class="row">
		<div class="col-md-7">
			
		</div>
		<div class="col-md-5">
			<a href="{{ route('cart.index') }}" class="btn btn-primary">Checkout</a>
		</div>
	</div>

@endsection
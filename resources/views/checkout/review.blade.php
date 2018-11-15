@extends('app')

@section('title', '| Checkout')

@section('content')

	<div class="container">

		@if (session()->has('success_message'))
			<div class="alert alert-success">
				{{ session()->get('success_message') }}
			</div>
		@endif

		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach 
				</ul>
			</div>
		@endif

		<h1>Checkout</h1>
		
		<div class="row">
			<div class="col-md-6">
				<form action="{{ route('checkout.store') }}" method="POST">
					@csrf
					<h2>Payment Details</h2>

					<div class="form-group">
						<label for="name">Name on Card</label>
						<input type="text" class="form-control" id="name" name="name" value="">
					</div>

					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" class="form-control" id="address" name="address" value="">
					</div>

					<div class="form-group">
						<label for="creditcard">Credit Card Number</label>
						<input type="text" class="form-control" id="creditcard" name="creditcard" value="">
					</div>

					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label for="expiry">Expiry</label>
								<input type="date" class="form-control" id="expiry" name="expiry" value="">
							</div>
						</div>

						<div class="col-md">
							<div class="form-group">
								<label for="cvccode">CVC Code</label>
								<input type="text" class="form-control" id="cvccode" name="cvccode" value="">
							</div>
						</div>
					</div>

					<hr>

					<div class="row justify-content-md-center">
						<div class="col-md-8">
							<button type="submit" class="btn btn-success btn-block">Complete Checkout</button>
						</div>
					</div>

				</form>

			</div>

			<div class="col-md-5 offset-md-1">
				<h2>Your Order</h2>
				<hr>
				@foreach($order->lines as $orderLine)
					@if($orderLine->LineTypeID == 1)
						<div class="row">
							<div class="col-md-2">
								{{-- <img src="{{ asset('images/'.$orderLine->product->detail->ObjectFile }}" alt=""> --}}
								<img src="" alt="product" class="rounded img-fluid">
							</div>
							<div class="col-md-8">
								<div class="row">
									<h5>{{ $orderLine->product->ProdName }}</h5>
								</div>
								<div class="row">
									@foreach($orderLine->options as $orderOption)
										<p>{{ $orderOption->OptName }}</p>
									@endforeach
								</div>
							</div>
						</div>
					@endif
				@endforeach

			</div>
		</div>

		
	
	</div>

@endsection
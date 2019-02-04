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
		
		<div class="row justify-content-center">
			<h3 class="font-weight-bold">Checkout</h3>
		</div>
		
		<div class="row justify-content-center">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item">Cart</li>
			    <li class="breadcrumb-item active">Shipping Information</li>
			    <li class="breadcrumb-item">Payment Details</li>
			  </ol>
			</nav>
		</div>

		<div class="row justify-content-center mt-5">
			<div class="col-md-7">
				<form action="{{ route('checkout.storeShippingAddress') }}" method="POST">
					@csrf

					@if(!$order->user_id)
						<div class="row justify-content-between px-3">
							<h4 class="font-weight-bold">Contact Information</h4>
							<p>Already have an account? <a href="{{ route('login') }}">Log In</a></p>
						</div>
						
						<div class="form-group mt-1">
							<input type="email" class="form-control form-control-lg" id="email" name="UserEmailShip" value="" placeholder="Email Address">
						</div>

						<hr>
					@endif

					<h4 class="font-weight-bold">Shipping Details</h4>

					<div class="form-group">
						<input type="text" class="form-control form-control-lg" id="name" name="AttentionShip" value="" placeholder="Name">
					</div>

					<div class="form-group">
						<input type="text" class="form-control form-control-lg" id="address" name="Street1Ship" value="" placeholder="Address">
					</div>

					<div class="form-group">
						<input type="text" class="form-control form-control-lg" id="city" name="CityShip" value="" placeholder="City">
					</div>

					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" id="country" name="CountryShip" value="" placeholder="Country">
								{{--
								<label for="Country">Country</label>
								<select class="form-control form-control-lg">
								  <option selected="">Choose One...</option>
								  <option>Large select</option>
								  <option>Large select</option>
								  <option>Large select</option>
								  <option>Large select</option>
								</select>
								--}}
							</div>
						</div>

						<div class="col-md">
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" id="province" name="ProvinceShip" value="" placeholder="State">
							</div>
						</div>

						<div class="col-md">
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" id="postalcode" name="PostalCodeShip" value="" placeholder="Postal Code">
							</div>
						</div>
					</div>

					
			
					<div class="form-group">
						<input type="text" class="form-control form-control-lg" id="phone" name="PhoneNumberShip" value="" placeholder="Phone Number">
					</div>

					

					<hr>

					{{--
					<h2>Billing Details</h2>

					<div class="form-group">
						<label for="UserEmail">Email Address</label>
						<input type="email" class="form-control" id="email" name="UserEmailBill" value="">
					</div>

					<div class="form-group">
						<label for="Attention">Name</label>
						<input type="text" class="form-control" id="name" name="AttentionBill" value="">
					</div>

					<div class="form-group">
						<label for="Street1">Address</label>
						<input type="text" class="form-control" id="address" name="Street1Bill" value="">
					</div>

					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label for="City">City</label>
								<input type="text" class="form-control" id="city" name="CityBill" value="">
							</div>
						</div>

						<div class="col-md">
							<div class="form-group">
								<label for="Province">Province</label>
								<input type="text" class="form-control" id="province" name="ProvinceBill" value="">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label for="PostalCode">Postal Code</label>
								<input type="text" class="form-control" id="postalcode" name="PostalCodeBill" value="">
							</div>
						</div>

						<div class="col-md">
							<div class="form-group">
								<label for="PhoneNumber">Phone</label>
								<input type="text" class="form-control" id="phone" name="PhoneNumberBill" value="">
							</div>
						</div>
					</div>

					<hr>
					--}}

					<input type="hidden" name="order_id" value="{{ $order->id }}">

					<div class="row">
						<div class="col-md-6">
							<a href="{{ route('cart.index') }}" class="btn btn-outline-secondary btn-block">Return to cart</a>
						</div>
						<div class="col-md-6">
							<button type="submit" class="btn btn-primary btn-block">Proceed to Order Review</button>
						</div>
					</div>

				</form>

			</div>
		</div>
		
	
	</div>

@endsection
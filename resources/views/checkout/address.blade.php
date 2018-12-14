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

		<div class="col-md-7">
			<form action="{{ route('checkout.storeAddress') }}" method="POST">
				@csrf
				<h2>Shipping Details</h2>

				<div class="form-group">
					<label for="UserEmail">Email Address</label>
					<input type="email" class="form-control" id="email" name="UserEmailShip" value="">
				</div>

				<div class="form-group">
					<label for="Attention">Name</label>
					<input type="text" class="form-control" id="name" name="AttentionShip" value="">
				</div>

				<div class="form-group">
					<label for="Street1">Address</label>
					<input type="text" class="form-control" id="address" name="Street1Ship" value="">
				</div>

				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label for="City">City</label>
							<input type="text" class="form-control" id="city" name="CityShip" value="">
						</div>
					</div>

					<div class="col-md">
						<div class="form-group">
							<label for="Province">Province</label>
							<input type="text" class="form-control" id="province" name="ProvinceShip" value="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label for="PostalCode">Postal Code</label>
							<input type="text" class="form-control" id="postalcode" name="PostalCodeShip" value="">
						</div>
					</div>

					<div class="col-md">
						<div class="form-group">
							<label for="PhoneNumber">Phone</label>
							<input type="text" class="form-control" id="phone" name="PhoneNumberShip" value="">
						</div>
					</div>
				</div>

				<hr>

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

				{{-- <input type="hidden" name="order_id" value="{{ $order->id }}"> --}}

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

@endsection
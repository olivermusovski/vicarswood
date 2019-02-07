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
			    <li class="breadcrumb-item">Shipping Information</li>
			    <li class="breadcrumb-item active">Payment Details</li>
			  </ol>
			</nav>
		</div>
		
		<div class="row mt-5">
			<div class="col-md-6">
				<form action="{{ route('checkout.complete') }}" method="POST">
					@csrf
					<div class="row mx-0 justify-content-between">
						<h4 class="font-weight-bold">Payment Details</h4>
						<span>
							<i class="fab fa-cc-visa fa-2x"></i>
							<i class="fab fa-cc-discover fa-2x ml-2"></i>
							<i class="fab fa-cc-mastercard fa-2x ml-2"></i>
							<i class="fab fa-cc-amex fa-2x ml-2"></i>
						</span>
						
					</div>
					
					
					<div class="form-group">
						<input type="text" class="form-control" id="creditcard" name="creditcard" value="" placeholder="Card Number">
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" value="" placeholder="Cardholder Name">
							</div>
						</div>
						
						<div class="col-md-3 pl-0">
							<div class="form-group">
								<input type="date" class="form-control" id="expiry" name="expiry" value="" placeholder="MM/YY">
							</div>
						</div>

						<div class="col-md-3 pl-0">
							<div class="form-group">
								<input type="text" class="form-control" id="cvccode" name="cvccode" value="" placeholder="CVV">
							</div>
						</div>
					</div>

					<input type="hidden" name="order_id" value="{{ $order->id }}">

					<hr>
					
					<h4 class="font-weight-bold">Billing Details</h4>

					<div class="form-group">
						<input type="text" class="form-control" id="name" name="AttentionBill" value="" placeholder="Name">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="address" name="Street1Bill" value="" placeholder="Address">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="city" name="CityBill" value="" placeholder="City">
					</div>

					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<input type="text" class="form-control" id="country" name="CountryBill" value="" placeholder="Country">
							</div>
						</div>

						<div class="col-md pl-0">
							<div class="form-group">
								<input type="text" class="form-control" id="province" name="ProvinceBill" value="" placeholder="State">
							</div>
						</div>

						<div class="col-md pl-0">
							<div class="form-group">
								<input type="text" class="form-control" id="postalcode" name="PostalCodeBill" value="" placeholder="Postal Code">
							</div>
						</div>
					</div>


					<div class="form-group">
						<input type="text" class="form-control" id="phone" name="PhoneNumberBill" value="" placeholder="Phone Number">
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary btn-block">Complete Checkout</button>
						</div>
					</div>

				</form>

			</div>

			<div class="col-md-5 offset-md-1">
				<h4 class="font-weight-bold">Your Order</h4>

				{{-- Order item list --}}
				<hr>
				@foreach($order->lines as $orderLine)
					@if($orderLine->LineTypeID == 1)
						<div class="row">
							<div class="col-md-2 align-self-center">
								<img src="{{ asset('images/'.$orderLine->product->detail->ObjectFile) }}" alt="product" class="rounded img-fluid">
							</div>
							<div class="col-md-8">
								<div class="row">
									<h5 class="mb-1">{{ $orderLine->product->ProdName }}</h5>
								</div>
								<div class="row">
									@foreach($orderLine->options as $orderOption)
										<p class="mb-1">{{ $orderOption->OptName }}</p>
									@endforeach
								</div>
								<div class="row">
									<p class="mb-1">${{ number_format($orderLine->ExtPartPrice, 2) }}</p>
								</div>
							</div>
							<div class="col-md-2 align-self-center">
								<h5>{{ $orderLine->Qty }}</h5>
							</div>
						</div>
						<hr>
					@endif
				@endforeach

				{{-- Discount codes --}}
				<p>Have a code?</p>
				<form action="{{ route('coupon.store') }}" method="POST">
					@csrf
					<div class="input-group mb-2">
						<input type="hidden" name="order_id" value="{{ $order->id }}">
						<input type="text" class="form-control" id="promo_code" name="promo_code" value="">
						<div class="input-group-btn w-33">
							<button type="submit" class="btn btn-secondary btn-block">Apply</button>
						</div>
					</div>
				</form>

				{{-- Start of the card with totals --}}
				<div class="card text-right">
					<div class="card-body">
						<p class="card-text">Subtotal: ${{ number_format($order->getSubTotal(), 2) }}</p>
						@foreach($order->lines as $orderLine)
							@if($orderLine->LineTypeID == 6)
								<div class="d-flex flex-row justify-content-end h-auto">
									<form action="{{ route('coupon.destroy', ['id' => $orderLine->id]) }}" method="POST" class="">
									@csrf
									@method('DELETE')
									<div class="form-group">
										<button type="submit" class="btn btn-outline-secondary btn-sm mr-2">Remove</button>
									</div>
								</form>
								<p class="card-text">Discount ({{ $orderLine->PartDesc }}): ${{ number_format($orderLine->ExtPartPrice, 2) }}</p>
								</div>
								
							@endif
						@endforeach
						@foreach($order->lines as $orderLine)
							@if($orderLine->LineTypeID == 4)
								<p class="card-text">Tax: ${{ number_format($orderLine->ExtPartPrice, 2) }}</p>
							@endif
						@endforeach
						@foreach($order->lines as $orderLine)
							@if($orderLine->LineTypeID == 5)
								<p class="card-text">Shipping & Handling: ${{ number_format($orderLine->ExtPartPrice, 2) }}</p>
							@endif
						@endforeach
					</div>
					<div class="card-footer text-muted">
						<h3>Total: ${{ number_format($order->getTotal(), 2) }}</h3>
					</div>
				</div>

			</div>
		</div>

		
	
	</div>

@endsection
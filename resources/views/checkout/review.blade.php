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
			    <li class="breadcrumb-item">Checkout</li>
			    <li class="breadcrumb-item">Shipping Information</li>
			    <li class="breadcrumb-item active">Payment Details</li>
			  </ol>
			</nav>
		</div>
		
		<div class="row mt-5">
			<div class="col-md-6">
				<form action="{{ route('checkout.complete') }}" method="POST">
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

					<input type="hidden" name="order_id" value="{{ $order->id }}">

					<hr>

					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-success btn-block">Complete Checkout</button>
						</div>
					</div>

				</form>

			</div>

			<div class="col-md-5 offset-md-1">
				<h2>Your Order</h2>
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
						<input type="text" class="form-control" id="coupon_code" name="coupon_code" value="">
						<div class="input-group-btn w-33">
							<button type="submit" class="btn btn-primary btn-block">Apply</button>
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
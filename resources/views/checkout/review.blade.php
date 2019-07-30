@extends('app')

@section('stylesheets')
<link href="{{ asset('css/stripe.css') }}" rel="stylesheet">
@endsection

@section('title', '| Checkout')

@section('content')

	<div class="container my-3">

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
			<h3 class="font-weight-bold">{{ __("Checkout") }}</h3>
		</div>
		
		<div class="row justify-content-center">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item">{{ __("Cart") }}</li>
			    <li class="breadcrumb-item">{{ __("Shipping Information") }}</li>
			    <li class="breadcrumb-item active">{{ __("Payment Details") }}</li>
			  </ol>
			</nav>
		</div>
		
		<div class="row mt-3">
			<div class="col-lg-5">
				<h4 class="font-weight-bold">{{ __("Your Order") }}</h4>

				{{-- Order item list --}}
				<hr>
				@foreach($order->lines as $orderLine)
					@if($orderLine->LineTypeID == 1)
						<div class="row">
							<div class="col-12">
								<img src="{{ asset('images/'.$orderLine->product->detail->ObjectFile) }}" alt="product" class="rounded img-fluid">
							</div>
							<div class="col-12">
								<h5 class="mt-2">{{ $orderLine->product->ProdName }}</h5>
								@foreach($orderLine->options as $orderOption)
									<p>{{ $orderOption->OptName }}</p>
								@endforeach
								<p>${{ number_format($orderLine->ExtPartPrice, 2) }}</p>
								
							</div>
							<div class="col-12">
								<h5>{{ $orderLine->Qty }}</h5>
							</div>
						</div>
						<hr>
					@endif
				@endforeach

				

			</div>
			<div class="col-lg-7 mt-3 mt-lg-0" id="checkout">
				{{-- Discount codes --}}
				<p>{{ __("Have a code?") }}</p>
				<form action="{{ route('coupon.store') }}" method="POST">
					@csrf
					<div class="input-group mb-2">
						<input type="hidden" name="order_id" value="{{ $order->id }}">
						<input type="text" class="form-control" id="promo_code" name="promo_code" value="">
						<div class="input-group-btn w-33">
							<button type="submit" class="btn btn-secondary btn-block">{{ __("Apply") }}</button>
						</div>
					</div>
				</form>

				{{-- Start of the card with totals --}}
				<div class="card text-right">
					<div class="card-body">
						<p class="card-text">{{ __("Subtotal") }}: ${{ number_format($order->getSubTotal(), 2) }}</p>
						@foreach($order->lines as $orderLine)
							@if($orderLine->LineTypeID == 6)
								<div class="d-flex flex-row justify-content-end h-auto">
									<form action="{{ route('coupon.destroy', ['id' => $orderLine->id]) }}" method="POST" class="">
									@csrf
									@method('DELETE')
									<div class="form-group">
										<button type="submit" class="btn btn-outline-secondary btn-sm mr-2">{{ __("Remove") }}</button>
									</div>
								</form>
								<p class="card-text">{{ __("Discount") }} ({{ $orderLine->PartDesc }}): ${{ number_format($orderLine->ExtPartPrice, 2) }}</p>
								</div>
								
							@endif
						@endforeach
						@foreach($order->lines as $orderLine)
							@if($orderLine->LineTypeID == 4)
								<p class="card-text">{{ __("Tax:") }} ${{ number_format($orderLine->ExtPartPrice, 2) }}</p>
							@endif
						@endforeach
						@foreach($order->lines as $orderLine)
							@if($orderLine->LineTypeID == 5)
								<p class="card-text">{{ __("Shipping & Handling") }}: ${{ number_format($orderLine->ExtPartPrice, 2) }}</p>
							@endif
						@endforeach
					</div>
					<div class="card-footer text-muted">
						<h3>Total: ${{ number_format($order->getTotal(), 2) }}</h3>
					</div>
				</div>

				<form action="{{ route('checkout.complete') }}" method="POST" id="payment-form" class="mt-3">
					@csrf
					{{-- <div class="row mx-0 justify-content-between">
						<h4 class="font-weight-bold">{{ __("Payment Details") }}</h4>
						<span>
							<i class="fab fa-cc-visa fa-2x"></i>
							<i class="fab fa-cc-discover fa-2x ml-2"></i>
							<i class="fab fa-cc-mastercard fa-2x ml-2"></i>
							<i class="fab fa-cc-amex fa-2x ml-2"></i>
						</span>
						
					</div> --}}

					<p>BILLING INFORMATION</p>
					
					<div class="form-group">
						<input class="w-100" id="name" name="name" required placeholder={{ __("Cardholder_Name") }}>
					</div>
					<div class="form-group">
						<input class="w-100" id="email" type="email" name="email" required placeholder={{ __("Email_Address") }}>
					</div>
					<div class="form-group">
						<label for="card-element">{{ __("PAYMENT INFORMATION") }}</label>
						<div id="card-element"></div>
						<div id="card-errors" role="alert"></div>
					</div>

					<input type="hidden" name="order_id" value="{{ $order->id }}">

					{{-- <hr>
					
					<h4 class="font-weight-bold">{{ __("Billing Details") }}</h4>

					<div class="form-group">
						<input type="text" class="form-control" id="name" name="AttentionBill" value="" placeholder={{ __("Name") }}>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="address" name="Street1Bill" value="" placeholder={{ __("Address") }}>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="city" name="CityBill" value="" placeholder={{ __("City") }}>
					</div>

					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<input type="text" class="form-control" id="country" name="CountryBill" value="" placeholder={{ __("Country") }}>
							</div>
						</div>

						<div class="col-md pl-0">
							<div class="form-group">
								<input type="text" class="form-control" id="province" name="ProvinceBill" value="" placeholder={{ __("State") }}>
							</div>
						</div>

						<div class="col-md pl-0">
							<div class="form-group">
								<input type="text" class="form-control" id="postalcode" name="PostalCodeBill" value="" placeholder={{ __("Postal Code") }}>
							</div>
						</div>
					</div>


					<div class="form-group">
						<input type="text" class="form-control" id="phone" name="PhoneNumberBill" value="" placeholder={{ __("Phone Number") }}>
					</div> --}}

					{{-- <hr> --}}

					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary btn-block">{{ __("Complete Checkout") }}</button>
						</div>
					</div>

				</form>

			</div>

			
		</div>

		
	
	</div>

@endsection

@section('scripts')
	<script>
		var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
		var elements = stripe.elements();
		var style = {
			base: {
				fontSize: '16px',
				color: "#32325d",
			}
		};
		var card = elements.create('card', {style: style});
		
		card.mount('#card-element');

		card.addEventListener('change', function(event) {
			var displayError = document.getElementById('card-errors');
			if(event.error) {
				displayError.textContent = event.error.message;
			} else {
				displayError.textContent = '';
			}
		});

		var form = document.getElementById('payment-form');

		form.addEventListener('submit', function(event) {
			event.preventDefault();
			stripe.createToken(card).then(function(result) {
				if(result.error) {
					var errorElement = document.getElementById('card-errors');
					errorElement.textContent = result.error.message;
				} else {
					stripeTokenHandler(result.token);
				}
			});
		});

		function stripeTokenHandler(token) {
		  	var form = document.getElementById('payment-form');
		 	var hiddenInput = document.createElement('input');
		  	hiddenInput.setAttribute('type', 'hidden');
		  	hiddenInput.setAttribute('name', 'stripeToken');
		  	hiddenInput.setAttribute('value', token.id);
		  	form.appendChild(hiddenInput);
		  	form.submit();
		}
	</script>



@endsection
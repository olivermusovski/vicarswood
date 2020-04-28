@extends('app')

@section('stylesheets')
<script src="http://www.codermen.com/js/jquery.js"></script>
<script src="https://api.mqcdn.com/sdk/place-search-js/v1.0.0/place-search.js"></script>
<link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/place-search-js/v1.0.0/place-search.css"/>
<script type="text/javascript">
  window.onload = function() {
    let ps = placeSearch({
      key: 'TUVfzD0Yf9wSRBTwUm4yKk9vUzYZ8J7m',
      container: document.querySelector('#form-address'),
      useDeviceLocation: true,
      collection: [
        'address',
      ]
    });

    ps.on('change', (e) => {
      document.querySelector('#form-street').value = e.result.name || '';
      document.querySelector('#form-city').value = e.result.city || '';
      // document.querySelector('#form-state').value = e.result.state || '';
      document.querySelector('#form-state-code').value = e.result.stateCode || '';
      document.querySelector('#form-zip').value = e.result.postalCode || '';
      document.querySelector('#form-country').value = e.result.country || '';
      document.querySelector('#form-country-code').value = e.result.countryCode || '';
    });

    ps.on('clear', () => {
      document.querySelector('#form-street').value = '';
      document.querySelector('#form-city').value = '';
      // document.querySelector('#form-state').value = '';
      document.querySelector('#form-state-code').value = '';
      document.querySelector('#form-zip').value = '';
      document.querySelector('#form-country').value = '';
      document.querySelector('#form-country-code').value = '';
    });

    ps.on('error', (e) => {
      console.log(e);
    });
  }
</script>
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
			    <li class="breadcrumb-item active">{{ __("Shipping Information") }}</li>
			    <li class="breadcrumb-item">{{ __("Payment Details") }}</li>
			  </ol>
			</nav>
		</div>

		<div class="row justify-content-center mt-3">
			<div class="col-md-7">
				{{-- <form action="/" class="form">
			        <div class="form-group">
			          <label for="form-address">Address*</label>
			          <input type="search" class="form-control" id="form-address" placeholder="Where do you live?" />
			        </div>
			        <div class="form-group">
			          <label for="form-street">Street</label>
			          <input type="text" class="form-control" id="form-street" placeholder="Street number and name" />
			        </div>
			        <div class="form-group">
			          <label for="form-city">City*</label>
			          <input type="text" class="form-control" id="form-city" placeholder="City">
			        </div>
			        <div class="form-group">
			          <label for="form-state">State*</label>
			          <input type="text" class="form-control" id="form-state" placeholder="State">
			        </div>
			        <div class="form-group">
			          <label for="form-state-code">State Code*</label>
			          <input type="text" class="form-control" id="form-state-code" placeholder="State Code">
			        </div>
			        <div class="form-group">
			          <label for="form-zip">ZIP code*</label>
			          <input type="text" class="form-control" id="form-zip" placeholder="ZIP code">
			        </div>
			        <div class="form-group">
			          <label for="form-country">Country*</label>
			          <input type="text" class="form-control" id="form-country" placeholder="Country">
			        </div>
			        <div class="form-group">
			          <label for="form-country-code">Country Code*</label>
			          <input type="text" class="form-control" id="form-country-code" placeholder="Country Code">
			        </div>
			      </form> --}}

				<form action="{{ route('checkout.storeShippingAddress') }}" method="POST" class="form">
					@csrf

					@if(!$order->user_id)
						<div class="row justify-content-between px-3">
							<h4 class="font-weight-bold">{{ __("Contact Information") }}</h4>
							<p>{{ __("Already have an account?") }} <a href="{{ route('login') }}">{{ __("Login") }}</a></p>
						</div>
						
						<div class="form-group mt-1">
							<input type="email" class="form-control" id="email" name="UserEmailShip" value="" placeholder="{{ __("Email Address") }}">
						</div>

						<hr>
					@endif

					<h4 class="font-weight-bold">{{ __("Shipping Details") }}</h4>

					<div class="form-group">
						<input type="text" class="form-control" id="name" name="AttentionShip" value="" placeholder="{{ __("Name") }}" required>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="form-address" name="AdressShip" value="" placeholder="{{ __("Search for your address") }}">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="form-street" name="Street1Ship" value="" placeholder="{{ __("Address") }}" required>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="form-city" name="CityShip" value="" placeholder="{{ __("City") }}" required>
					</div>
				
					<div class="form-group">
						<input type="text" class="form-control" id="form-state-code" name="ProvinceShip" value="" placeholder="{{ __("State") }}" required>
					</div>

					{{-- <div class="form-group">
						<input type="text" class="form-control" id="form-state-code" name="ProvinceCodeShip" value="" placeholder="{{ __("State Code") }}">
					</div> --}}
				
					<div class="form-group">
						<input type="text" class="form-control" id="form-zip" name="PostalCodeShip" value="" placeholder="{{ __("Postal Code") }}" required>
					</div>
				
					<div class="form-group">
			          	<input type="text" class="form-control" id="form-country" name="CountryShip" placeholder="{{ __("Country") }}" required>
			        </div>

			        {{-- <div class="form-group">
			          	<input type="text" class="form-control" id="form-country-code" name="CountryCodeShip" placeholder="{{ __("Country Code") }}">
			        </div> --}}

					<div class="form-group">
						<input type="text" class="form-control" id="phone" name="PhoneNumberShip" value="" placeholder="{{ __("Phone Number") }}">
					</div>					

					{{-- <div class="form-group">
						<input type="text" class="form-control form-control-lg" id="city" name="CityShip" value="" placeholder={{ __("City") }}>
						<select class="form-control form-control-lg" name="city" id="city"></select>
					</div> --}}

					<div class="row">
						{{-- <div class="col-md-12 col-lg">
							<div class="form-group">
								<select class="form-control form-control-lg" id="country" name="category_id">
									<option value="" selected disabled>Select</option>
									@foreach($countries as $key => $country)
									<option value="{{$key}}">{{$country}}</option>
									@endforeach
								</select>
								<input type="text" class="form-control form-control-lg" id="country" name="CountryShip" value="" placeholder={{ __("Country") }}>
								
							</div>
						</div>

						<div class="col-md-12 col-lg">
							<div class="form-group">
								{{-- <input type="text" class="form-control form-control-lg" id="province" name="ProvinceShip" value="" placeholder={{ __("State") }}> --}}
								{{-- <select class="form-control form-control-lg" name="state" id="state"></select>
							</div>
						</div> --}}

						

						
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
							<a href="{{ route('cart.index') }}" class="btn btn-outline-secondary btn-block">{{ __("Return to cart") }}</a>
						</div>
						<div class="col-md-6 mt-3 mt-md-0">
							<button type="submit" class="btn btn-primary btn-block">{{ __("Proceed to Order Review") }}</button>
						</div>
					</div>

				</form>

			</div>
		</div>
		
	
	</div>

@endsection

@section('scripts')	

	{{-- <script type="text/javascript">
		$('#country').change(function(){
	    var countryID = $(this).val();    
	    if(countryID){
	        $.ajax({
	           type:"GET",
	           url:"{{url('get-state-list')}}?country_id="+countryID,
	           success:function(res){               
	            if(res){
	                $("#state").empty();
	                $("#state").append('<option>Select</option>');
	                $.each(res,function(key,value){
	                    $("#state").append('<option value="'+key+'">'+value+'</option>');
	                });
	           
	            }else{
	               $("#state").empty();
	            }
	           }
	        });
	    }else{
	        $("#state").empty();
	        $("#city").empty();
	    }      
	   });
	    $('#state').on('change',function(){
	    var stateID = $(this).val();    
	    if(stateID){
	        $.ajax({
	           type:"GET",
	           url:"{{url('get-city-list')}}?state_id="+stateID,
	           success:function(res){               
	            if(res){
	                $("#city").empty();
	                $.each(res,function(key,value){
	                    $("#city").append('<option value="'+key+'">'+value+'</option>');
	                });
	           
	            }else{
	               $("#city").empty();
	            }
	           }
	        });
	    }else{
	        $("#city").empty();
	    }
	        
	   });
	</script> --}}

@endsection 
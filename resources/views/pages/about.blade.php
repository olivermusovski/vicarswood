@extends('app')

@section('title', '| About')

@section('content')
   
    <div class="container">
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dFCSFqHNfKs" allowfullscreen></iframe>
		</div>
		<div class="row justify-content-md-center mt-3">
			<div class="col-md-9">
				<h1>{{ __('About') }}</h1>
	        	<h5>
	        		{{ __('Robert Sargeant began fine working and supplied unique furniture to Northern California. His son endured the apprenticeship and inherited the tools in 2014. These skills and tools formed Vicarswood. Located now in Las Vegas, this small workshop offers an interesting place to work as well as producing progressive furniture.') }}
					<br><br>
					{{ __('Desks and Chest of Drawers remain priority. All products are all built-to-order.  Custom finishes, hardware and other options are available to uniquely configure furniture to an order specification. To support that, please expect a 6-8 week lead-time to receive your order and be confident that Vicarswood warrants its workmanship. But since all product are built-to-order, refunds are not allowed.') }}  
					<br><br>
					{{ __('Products are sold either through exclusive Distributors or on-line through this web site. As an e-commerce site, customer privacy is paramount. For more information, please see our') }} <a href="{{ url('/privacy-policy') }}">{{ __('Privacy and Data Policy') }}</a>.
					<br><br>
					{{ __('For more information, please see our') }} <a href="{{ url('/terms-and-conditions') }}">{{ __('Terms and Conditions of Sale') }}</a>.
					<br><br>
					{{ __('Commissioned work or unique features to products can be discussed and quoted as well.') }}
					<br><br>
					{{ __('Please send inquiries to') }}: <br>
					Vicarswood, LLC <br>
					Las Vegas, NV USA
					<br><br>
					{{ __('Or by email to') }}: <br>
					customersupport@vicarswood.com
					<br><br>
					{{ __('Inspired by wood? View job openings at') }} <a href="{{ url('/careers') }}">{{ __('Careers with Vicarswood') }}</a>.
	        	</h5>
        	</div>
		</div>
        
    </div>
    
@endsection
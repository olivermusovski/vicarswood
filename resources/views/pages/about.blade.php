@extends('app')

@section('title', '| About')

@section('content')
   
    <div class="container my-3">
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5WNtoAntT4U" allowfullscreen></iframe>
		</div>
		<div class="row justify-content-md-center mt-3">
			<div class="col-md-9">
				<h1>{{ __('About') }}</h1>
	        	<h5>
	        		{{ __('There’s more to Vicarswood than the apprentice son inherits master’s tools, but that is where it started.  Skills wanted perfection.  Designs needed maturing and order fulfillment required capacity and technology.  Now Vicarswood continues in Las Vegas.  ') }}
					<br><br>
					{{ __('Our website is effective as we are small in numbers.  With few disputes and many laughs, we would like to think that each piece of furniture joins your journey.') }}  
					<br><br>
					{{ __(' ') }}</a>.
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
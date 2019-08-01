@extends('app')

@section('title', '| Careers')

@section('content')
   
    <div class="container my-3">
		
		<div class="row justify-content-md-center">
			<div class="col-md-9">
				<h1>{{ __("Careers") }}</h1>
	        	<h4>
	        		{{ __("Currently there are no openings, but we’d like to hear your interest if you have skill and background in any of the areas") }}:
	        		<br><br>
	        		• {{ __("Programmer") }} - PHP/SQL,
	        		<br>
					• {{ __('Data Scientist – Analytics, Economics/Marketing, or') }},
					<br>
					• {{ __('Engineer - Furniture Design & Autodesk Fusion 360.') }}
				
					<br>
	        	</h4>
        	</div>
		</div>
        
    </div>
    
@endsection






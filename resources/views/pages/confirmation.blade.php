@extends('app')

@section('title', '| Checkout')

@section('content')

	<div class="container my-5 py-5">

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
		
		<div class="d-flex justify-content-center my-5 py-5">
			<h1 class="">{{ __("Thank you for your order!") }}</h1>
		</div>

	</div>
	



@endsection
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

		<h1>Thank you for your order!</h1>
		
	</div>
	



@endsection
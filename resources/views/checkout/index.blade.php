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

		<div class="row">
			<div class="col-md-7">
				<form action="{{ route('checkout.store') }}" method="POST">
					@csrf
					<hr>
					<button type="submit" class="btn btn-primary btn-block">Complete Order</button>
				</form>
			</div>
			<div class="col-md-5">

				
			</div>
		</div>
	</div>

@endsection
@extends('app')

@section('title', '| Shopping Cart')

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

		@if (Cart::isEmpty())
			<h3>No items in Shopping Cart</h3>
			<a href="{{ route('products.index') }}" class="btn btn-primary"><-- Continue Shopping</a>
		@else
			<h2>{{ Cart::getContent()->count() }} item(s) in Shopping Cart</h2>
			<hr>
			@foreach ( Cart::getContent() as $item)
				<div class="row mb-3">
					<div class="col-md-6">
						<a href="{{ route('products.show', $item->id) }}"><img src="#" alt="item" class="rounded float-left mr-2" style="width: 150px; height: 150px; border: solid;"></a>
						<div class="mt-4">
							<div class="row"><a href="{{ route('products.show', $item->id) }}">{{ $item->name }}</a></div>
							<div class="row"><p>{{ $item->attributes->desc }}</p></div>
						</div>
					</div>
					<div class="col mt-4">
						<div class="row">
							<form action="{{ route('cart.destroy', $item->id) }}" method="POST">
								@csrf
								{{ method_field('DELETE') }}
								<button type="submit" class="btn btn-sm btn-primary">Remove</button>
							</form>
						</div>
						<div class="row"><a href="#">Save for later</a></div>
					</div>
					<div class="col mt-4">
						<select name="" id="" class="form-control">
							<option value="" selected="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
							<option value="">5</option>
						</select>
					</div>
					<div class="col mt-4">
						<div>${{ number_format($item->price, 2) }}</div>
					</div>
				</div>
				<hr>
			@endforeach
			
			<div class="row">
				<div class="col-md-5 offset-md-7">
					<div class="card text-right">
					  <div class="card-body">
					    <p class="card-text">Subtotal: {{ number_format(Cart::getSubTotal(), 2) }} </p>
					    <p class="card-text">Tax: {{ number_format(Cart::getSubTotal() * 0.0825, 2) }} </p>
					  </div>
					  <div class="card-footer text-muted">
					    <h4>Total: {{ number_format(Cart::getTotal() + (Cart::getSubTotal() * 0.0825), 2) }}</h4>
					  </div>
					</div>
				</div>
			</div>
			

		@endif
		
	</div>

@endsection
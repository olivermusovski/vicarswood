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
			<div class="row justify-content-md-center">
				<h3 class="font-weight-bold">CART</h3>
			</div>
			<div class="row justify-content-md-center">
				<h5 class="text-muted">You don't have any items in your cart yet.</h5>
			</div>
			<div class="row justify-content-md-center">
				<a href="{{ route('products.index') }}" class="btn btn-outline-primary mt-4">Continue Shopping</a>
			</div>
		@else
			<h2>{{ Cart::getTotalQuantity() }} item(s) in Shopping Cart</h2>
			<hr>
			@foreach ( Cart::getContent() as $item)
				<div class="row mb-3">
					<div class="col-md-6">
						<a href="{{ route('products.show', $item->id) }}"><img src="" alt="item" class="rounded float-left mr-2" style="width: 150px; height: 150px; border: solid;"></a>
						<div class="mt-4">
							<div class="row"><a href="{{ route('products.show', $item->id) }}">{{ $item->name }}</a></div>
							<div class="row"><p>{{ $item->attributes->desc }} ${{ $item->price }}</p></div>
							@foreach ($item->conditions as $condition)
								<div class="row"><p>{{ $condition->getName() }} +${{ $condition->getValue() }}</p></div>
							@endforeach				
						</div>
					</div>
					<div class="col mt-4">
						<div class="row">
							<form action="{{ route('cart.destroy', $item->id) }}" method="POST">
								@csrf
								{{ method_field('DELETE') }}
								<button type="submit" class="btn btn-sm btn-secondary">Remove</button>
							</form>
						</div>
						<div class="row">
							<form action="#" method="POST">
								@csrf
								<button type="submit" class="btn btn-sm btn-secondary mt-2">Save for later</button>
							</form>
						</div>
					</div>
					<div class="col mt-4">
						<select name="" class="form-control quantity" data-id="{{ $item->id }}">
							@for($i = 1; $i <= 5; $i++)
								<option value="{{ $i }}" {{ $item->quantity == $i ? 'selected' : '' }}>{{ $i }}</option>
							@endfor
						</select>
					</div>
					<div class="col mt-4">
						<div>${{ number_format($item->getPriceWithConditions(), 2) }}</div>
					</div>
				</div>
				<hr>
			@endforeach
			
			<div class="row">
				<div class="col-md-5 offset-md-7">
					<div class="card text-right">
					  <div class="card-body">
					    <p class="card-text">Subtotal: {{ number_format(Cart::getSubTotal(), 2) }} </p>
					  </div>
					  <div class="card-footer text-muted">
					    <h4>Total: {{ number_format(Cart::getTotal(), 2) }}</h4>
					  </div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-5 offset-md-7 text-right mt-4">
					<a href="{{ route('products.index') }}" class="btn btn-secondary">Continue Shopping</a>
					{{--
					<form action="{{ route('checkout.store') }}" method="POST" class="float-right">
						@csrf
						<button type="submit" class="btn btn-primary">Proceed to Checkout</button>
					</form>
					--}}
					<a href="{{ route('checkout.shipping') }}" class="btn btn-primary ml-2">Proceed to Checkout</a>
				</div>
			</div>

		@endif
		
	</div>

@endsection

@section('scripts')	

	<script>
		(function() {
			const classname = document.querySelectorAll('.quantity')

			Array.from(classname).forEach(function(element) {
				element.addEventListener('change', function() {
					const id = element.getAttribute('data-id')
					axios.patch(`/cart/${id}`, {
						quantity: this.value
					})
					.then(function(response) {
						window.location.href = '{{ route('cart.index') }}'
					})
					.catch(function(error) {
						console.log(error);
						window.location.href = '{{ route('cart.index') }}'
					});
				})
			})
		})();
	</script>

@endsection 
@extends('app')

@section('title', '| Shopping Cart')

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

		@if (Cart::isEmpty())
			<div class="row justify-content-md-center">
				<h3 class="font-weight-bold">{{ __('CART') }}</h3>
			</div>
			<div class="row justify-content-md-center">
				<h5 class="text-muted">{{ __("You don't have any items in your cart yet.") }}</h5>
			</div>
			<div class="row justify-content-md-center">
				<a href="{{ route('products.index') }}" class="btn btn-outline-primary mt-4">{{ __("Continue Shopping") }}</a>
			</div>
		@else
			<h2>{{ Cart::getTotalQuantity() }} {{ __("item(s) in Shopping Cart") }}</h2>
			<hr>
			@foreach (Cart::getContent() as $item)
				<div class="row">
					<div class="col-12 col-md-8 col-lg-5">
						<a href="{{ route('products.show', $item->id) }}"><img src="{{ asset('images/'.$item->attributes->imagepath) }}" alt="product" class="rounded float-md-left mr-md-2 mx-auto img-fluid"></a>
					</div>
					<div class="col-12 col-md-4 col-lg-3">
						<div class="mt-4">
							<a href="{{ route('products.show', $item->attributes->id) }}">{{ $item->name }}</a>
							<p class="mb-0">{{ $item->attributes->desc }} ${{ $item->price }}</p>
							@foreach ($item->conditions as $condition)
								<ul class="mb-0 pl-4">
									<li class="">{{ $condition->getName() }} @if($condition->getValue() >= 0) +@else -@endif${{ number_format(abs($condition->getValue()), 2) }}</li>
								</ul>
							@endforeach				
						</div>
					</div>
					<div class="col-6 col-md-2 col-lg-2 mt-4 align-self-md-end">
						<form action="{{ route('cart.destroy', $item->id) }}" method="POST">
							@csrf
							{{ method_field('DELETE') }}
							<button type="submit" class="btn btn-block btn-secondary"><i class="fas fa-trash-alt"></i> {{ __("Remove") }}</button>
						</form>
					</div>
					<div class="col-6 col-md-3 col-lg-2 mt-4 align-self-md-end">
						<form action="#" method="POST">
							@csrf
							<button type="submit" class="btn btn-block btn-secondary">{{ __("Save For Later") }}</button>
						</form>
					</div>
					<div class="col-6 col-md-2 col-lg-2 mt-4">
						<label>Qty:</label>
						<select name="" class="form-control quantity" data-id="{{ $item->id }}">
							@for($i = 1; $i <= 5; $i++)
								<option value="{{ $i }}" {{ $item->quantity == $i ? 'selected' : '' }}>{{ $i }}</option>
							@endfor
						</select>
					</div>
					<div class="col-6 col-md-5 mt-4">
						<label>Price:</label>
						<h4>${{ number_format($item->getPriceWithConditions() * $item->quantity, 2) }}</h4>
					</div>
				</div>
				<hr>
			@endforeach
			
			<div class="row justify-content-md-center">
				<div class="col-md-6">
					{{-- Discount codes --}}
					<p>{{ __("Have a code?") }}</p>
					<form action="{{ route('coupon.storeFromCart') }}" method="POST">
						@csrf
						<div class="input-group mb-2">
							<input type="hidden" name="order_id" value="">
							<input type="text" class="form-control" id="promo_code" name="promo_code" value="">
							<div class="input-group-btn w-33">
								<button type="submit" class="btn btn-secondary btn-block">{{ __("Apply") }}</button>
							</div>
						</div>
					</form>

					{{-- Totals card --}}
					<div class="card text-right">
					  <div class="card-body">
					    <p class="card-text text-muted">{{ __("Subtotal") }}: {{ number_format(Cart::getSubTotal(), 2) }} </p>
					    @if (Cart::getCondition('promo'))
							<div class="d-flex flex-row justify-content-end h-auto">
								<form action="{{ route('coupon.destroyFromCart') }}" method="POST" class="">
									@csrf
									@method('DELETE')
									<div class="form-group">
										<button type="submit" class="btn btn-outline-secondary btn-sm mr-2">{{ __("Remove") }}</button>
									</div>
								</form>
								<p class="card-text">{{ __("Discount") }} ({{ Cart::getCondition('promo')->getAttributes()['description'] }}): ${{ number_format(Cart::getCondition('promo')->getCalculatedValue(Cart::getSubTotal()), 2) }}</p>
							</div>
						@endif
					  </div>
					  <div class="card-footer">
					    <h3>{{ __("Total") }}: {{ number_format(Cart::getTotal(), 2) }}</h3>
					  </div>
					</div>
				</div>
			</div>
			
			<div class="row justify-content-md-center">
				<div class="col-6 col-md-4 mt-4">
					<a href="{{ route('products.index') }}" class="btn btn-block btn-secondary">{{ __("Continue Shopping") }}</a>
				</div>
				<div class="col-6 col-md-4 mt-4">
					<form action="{{ route('checkout.store') }}" method="POST">
						@csrf
						<button type="submit" class="btn btn-block btn-primary">{{ __("Checkout") }}</button>
					</form>
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
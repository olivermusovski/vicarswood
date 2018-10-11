@extends('app')

@section('title', '| Product')

@section('content')
   
    <div class="container">
    	<h1 class="font-weight-bold mb-4">Product Page</h1>
    	<div class="row">
    		<div class="col-md-4">
				<img src="#" alt="" width="300" height="300">
    		</div>
    		<div class="col-md-8">
    			<h3>{{ $product->ProdName." - ".$product->ProdDesc }}</h3>
				<p>{{ $product->ProdProse }}</p>
				<h5>Base Price: ${{ number_format($product->BasePrice, 2) }}</h5>
				@php $totalPrice = $product->BasePrice; @endphp

				@php $grouped = $product->options->groupBy('PositionName'); @endphp
				@foreach($grouped as $group => $member)
					<div class="form-group">
						<label for="finish">{{ $group }}</label>
						<select name="finish" id="finish" class="form-control">
							@foreach($member as $eachmember)
								<option value="">{{ $eachmember->OptName }} - ${{ number_format($eachmember->OptPrice, 2) }}</option>
							@endforeach
						</select>
					</div>
				@endforeach
				@php $totalPrice += $eachmember->OptPrice; @endphp
				<h5>Total Price: ${{ number_format($totalPrice, 2) }}</h5>

				<form action="{{ route('cart.store') }}" method="POST">
					@csrf
					
					<input type="hidden" name="id" value="{{ $product->id }}">
					<input type="hidden" name="name" value="{{ $product->ProdName }}">
					<input type="hidden" name="price" value="{{ $product->BasePrice }}">
					<input type="hidden" name="desc" value="{{ $product->ProdDesc }}">
					<button type="submit" class="btn btn-primary btn-lg btn-block mb-2"><i class="fas fa-shopping-cart"></i> Add to Cart</button>	
				</form>
				

    		</div>
    	</div>
    </div>
    
@endsection
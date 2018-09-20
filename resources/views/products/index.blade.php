@extends('app')

@section('title', '| Products')

@section('content')
   
    <div class="container">
    	<h1 class="font-weight-bold mb-4">Products Page</h1>
    	<div class="row">
    		<div class="col-md-12">
		    	@foreach($products as $product)
					<h3>{{ $product->ProdName." - ".$product->ProdDesc }}</h3>
					<p>{{ $product->BaseNBR }}</p>
					<p>{{ $product->ProdProse }}</p>
					<a href="{{ route('products.show', $product->id) }}" class="btn btn-lg btn-primary">Select</a>
					<hr>
		        @endforeach
    		</div>
    	</div>
    </div>
    
@endsection
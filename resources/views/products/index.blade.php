@extends('app')

@section('title', '| Products')

@section('content')
   
    <div class="container">
    	<h1 class="font-weight-bold mb-4">Products Page</h1>
    	<div class="row">
    		@foreach($products as $product)
	    		<div class="col-md-3">
	    			<a href="#"><img src="#" alt="product" class="rounded" style="width: 100px; height: 100px; border: solid;"></a>
	    		</div>
	    		<div class="col-md-9">
					<h3>{{ $product->ProdName." - ".$product->ProdDesc }}</h3>
					<p>{{ $product->BaseNBR }}</p>
					<p>{{ $product->ProdProse }}</p>
					<a href="{{ route('products.show', $product->id) }}" class="btn btn-lg btn-primary">Select</a>
					<hr>
	    		</div>
    		@endforeach
    	</div>
    </div>
    
@endsection
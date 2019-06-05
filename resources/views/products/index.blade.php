@extends('app')

@section('title', '| Products')

@section('content')
   
    <div class="container">
    	<h1 class="font-weight-bold mb-4">{{ __("Products Page") }}</h1>
    	<div class="row justify-content-center">
    		@foreach($products as $product)
		    	<div class="col-md-10">
		    		<div class="card bg-light mt-4" style="width: 100%;">
		    			<a href="{{ route('products.show', $product->id) }}"><img class="card-img-top img-fluid" src="{{ asset('images/'.$product->detail->ObjectFile) }}" alt="product"></a>
		    			<div class="card-body">
		    				<h5 class="card-title font-weight-bold text-center">{{ $product->ProdName." - ".$product->ProdDesc }}</h5>
		    				<h6 class="card-subtitle text-center text-muted">{{ $product->getPriceRange() }}</h6>
		    				<a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-block mt-2">{{ __("Shop") }}</a>
		    			</div>
		    		</div>
		    	</div>
    		@endforeach
    	</div>
    </div>
    
@endsection
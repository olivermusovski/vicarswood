@extends('app')

@section('title', '| Product')

@section('content')
   
    <div class="container">
    	<h1 class="font-weight-bold mb-4">Product Page</h1>
    	<div class="row">
    		<div class="col-md-7">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				  	@php $i = 0 @endphp
				  	@foreach($product->details as $detail)
						<li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" @if($i == 0) class="active" @endif></li>
						@php $i++ @endphp
				  	@endforeach
				  </ol>
				  <div class="carousel-inner">
				  	@foreach($product->details as $detail)
						<div class="carousel-item {{ ($detail->ObjectSequence == 1) ? "active" : "" }}">
					      <img class="d-block w-100" src="{{ asset('images/'.$detail->ObjectFile) }}" alt="{{ $detail->ObjectName }}">
					    </div>
				  	@endforeach
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
    		</div>
    		
    		<div class="col-md-5">
    			<h2 class="font-weight-bold">{{ $product->ProdName." - ".$product->ProdDesc }}</h2>
				<h5 class="text-muted">Base Price: ${{ number_format($product->BasePrice, 2) }}</h5>
				<h5 class="text-muted">Price Range: {{ $product->getPriceRange() }}</h5>
				
				@php 
				$totalPrice = $product->BasePrice; 
				@endphp
				
				<form class="mt-4" action="{{ route('cart.store') }}" method="POST">
					@csrf
					
					@php 
					$optionName = $product->options->groupBy('PositionName'); 
					@endphp
					
					@foreach($optionName as $option => $member)
						<div class="form-group">
							<label for="options[]">{{ $option }}</label>
							<select name="options[]" class="form-control">
								@foreach($member as $eachmember)
									<option value="{{ $eachmember->id }}" @if($eachmember->Default) selected="" @endif>{{ $eachmember->OptName }} - ${{ number_format($eachmember->OptPrice, 2) }}</option>
								@endforeach
							</select>
						</div>
					@endforeach

					<input type="hidden" name="id" value="{{ $product->id }}">
					<input type="hidden" name="name" value="{{ $product->ProdName }}">
					<input type="hidden" name="price" value="{{ $product->BasePrice }}">
					<input type="hidden" name="desc" value="{{ $product->ProdDesc }}">
					<button type="submit" class="btn btn-primary btn-lg btn-block mb-2"><i class="fas fa-shopping-cart"></i> Add to Cart</button>	
				</form>
				<h5 class="mt-4 text-muted">{{ $product->ProdProse }}</h5>
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-md-6">
    			
    		</div>
    	</div>
    </div>
    
@endsection
@extends('layout.main')
@section('title', 'Listado de Productos')
@section('content')

	@include('layout.text_slider')

	<div class="container">
		<div class="row" id="list">

			@foreach( $products as $product )
				<div class="card" >
					<a href="/product_show/{{ $product->id }}" target="_blank">
				  		<img class="card-img-top" src="{{ $product->image_path }}" alt="Image">
				    </a>
				  <div class="card-body">
				  	<h6>{{ $product->name }} - {{ $product->code }}</h6>
				    <p class="card-text"> {{ $product->price }} COP</p>
				  </div>
				</div>
			@endforeach
			<div id="pagination_container">
				{{ $products->links() }}
			</div>
			
			
		</div>
	</div>
@endsection
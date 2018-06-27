@extends('catalog.template')
@section('title', 'Resultado de la Busqueda')
@section('content')
<div class="pure-g">
	@if( $results['code'] != 404 )
	    @foreach ( $results as $result )
	        <div class="pure-u-1-4">
	            <div class="l-box product_card">
	                <a href="/product_show/{{ $product->id }}" class="product_container">
	                	<div class="image_container">
	                    	<img src="/{{$result->image_path}}">
	                	</div>
	                    <h5>{{$result->name}} - {{$result->code}}</h5>
	                    <p>{{$result->price}}COP</p>
	                </a>
	             </div>
	        </div>
	    @endforeach
    @else
		<h4 class="pure-u-1" id="search_message_results">{{ $results['msg'] }}</h4>
	@endif
</div>
@endsection()
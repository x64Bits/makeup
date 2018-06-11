@extends('layout.main')
@section('title', 'Listado de Productos')
@section('content')

	@include('layout.text_slider')

	<div class="container">
		<div class="row" id="list">
			@if( $results['code'] != 404 )
				@foreach( $results as $result )
					<div class="card" >
						<a href="/product_show/{{ $result->id }}" target="_blank">
					  		<img class="card-img-top" src="{{ str_replace('public/','/storage/',$result->image_path) }}" alt="Image">
					    </a>
					  <div class="card-body">
					  	<h6>{{ $result->name }} - {{ $result->code }}</h6>
					    <p class="card-text"> {{ $result->price }} COP</p>
					  </div>
					</div>
				@endforeach
				<div id="pagination_container">
					{{ $results->links() }}
				</div>
			@else
			<h4 style="padding-left:40px;padding-bottom: 100px; padding-top: 120px">{{ $results['msg'] }}...</h4>
			@endif
			
			
			
		</div>
	</div>
@endsection
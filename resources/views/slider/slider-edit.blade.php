@extends('layout.main_inside')
@section('title', 'Panel de Gestion web')
@section('section_title', 'ADMINISTRADOR DEL CARRUCEL')
@section('content')
	<div class="container">
		<div class="row" id="slider-form-row">
			<div class="col-md-10">
				@if(Session::has('message'))
					<script>
						toastr.success('Excelente', 'La imagen ha sido cargada con exito')
					</script>
				@endif
				<form action="{{ route('slider.store') }}" id="slider-file-form" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="slider-file-input" id="slider-file-label"></label>
						<input name="slider_image" type="file" class="form-control-file" id="slider-file-input" required>
					</div>
					<button type="submit" class="btn btn-primary" id="slider-file-btn-add">Agregar</button>
					<div class="form-group" id="slider-file-group-position">
						<label for="slider-file-input-position">Posicion </label>
   						<input name="position" type="text" class="form-control" id="slider-file-input-position" aria-describedby="Posicion" placeholder="1">
					</div>
				</form>
			</div>
		</div>
		<div class="row" id="slider-list-row">
			<div id="slider-list">
				@foreach( $images as $image )
					<div class="slider-list-item">
						<span class="slider-list-position">{{ $image->position }}</span>
						<span class="slider-list-name">{{ $image->name }}</span>
						<a class="slider-list-btn-delete" href="{{ route('slider.destroy', $image->id) }}">Eliminar</a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection
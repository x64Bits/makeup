@extends('layout.main_inside')
@section('title', 'Panel de Gestion web')
@section('section_title', 'PANEL DE GESTIÓN WEB')
@section('content')
	<style></style>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<a href="{{ route('slider.create') }}">
					<div class="big-btn-admin" id="bigbtn-admin-slider">
						<h3>ADMINISTRAR CARRUCEL</h3>
					</div>
				</a>	
			</div>
			<div class="col-md-6">
				<a href="#">
					<div class="big-btn-admin" id="bigbtn-admin-catalog">
						<h3>ADMINISTRAR CATALOGO</h3>
					</div>
				</a>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>

@endsection
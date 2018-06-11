@extends('layout.main_inside')
@section('title', 'Administre su Catalogo')
@section('section_title', 'Administre su Catalogo')
@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-4 item_catalog">
				<a href="/products/create">
					<div class="item_container">
						<img src="/image/icon_add_b.png" alt="">
						<h4>Agregar</h4>
					</div>
				</a>
			</div>
			<div class="col-md-4 item_catalog">
				<a href="/product/edit">
					<div class="item_container">
						<img src="/image/icon_edit.png" alt="">
						<h4>Editar</h4>
					</div>
				</a>
			</div>
			<div class="col-md-4 item_catalog">
				<a href="/product/delete">
					<div class="item_container">
						<img src="/image/icon_delete.png" alt="">
						<h4>Eliminar</h4>
					</div>
				</a>
			</div>
		</div>
	</div>

@endsection
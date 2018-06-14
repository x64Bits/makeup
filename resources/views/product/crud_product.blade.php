@extends('layout.main_inside')
@section('title', 'Administrar Producto')
@section('section_title', 'Administrar Producto')
@section('content')
	<div class="row">		
		<div class="col-md-6"></div>
		<div class="col-md-6" id="right_form">
			<form id="form_crud" method="POST" enctype="multipart/form-data">
				<div id="file_group">
					<input type="file" name="image_path" id="image_path">
					<label id="file_label" for="image_path"></label>
					<h5>Imagen del Producto</h5>
				</div>
			    <div class="form-group">
				    <input type="text" class="form-control" name="category" placeholder="Categoria" id="input_category">
			    </div>
			    <div class="form-group">
				    <input type="text" class="form-control" name="name" placeholder="Nombre" id="input_name">
			    </div>
			    <div class="form-group">
				    <input type="text" class="form-control" name="brand" placeholder="Marca" id="input_brand">
			    </div>
			    <div class="form-group" id="search_form">
				    <input type="text" class="form-control" name="code" placeholder="Codigo" id="product_code">
				    <a id="edit_search">
				    	<i class="fas fa-search" aria-hidden="true"></i>
				    </a>
			    </div>
			    <div class="form-group">
				    <input type="text" class="form-control decimal" name="price" placeholder="Precio" id="input_price">
				</div>
				<button id="btn_create_product" type="button" class="mu_btn btn btn-secondary">Crear</button>
				<button id="btn_edit_product" type="button" class="mu_btn btn btn-secondary">Actualizar</button>
			    <button id="btn_delete_product" type="button" class="mu_btn btn btn-secondary">Eliminar</button>
			</form>		
		</div>
    </div>
	<style>
			#footer2 {
				margin-top:0px;
			}
	</style>
@endsection
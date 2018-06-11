@extends('layout.main_inside')
@section('title', 'Crear Producto')
@section('section_title', 'Producto Nuevo')
@section('content')

	<div class="row">		
		<div class="col-md-6"></div>
		<div class="col-md-6" id="right_form">
			<form id="form_create" method="post" enctype="multipart/form-data">
				<div id="file_group">
					<input type="file" name="image_path" id="image_path">
					<label id="file_label" for="image_path"></label>
					<h5>Imagen del Producto</h5>
				</div>
			    <div class="form-group">
				    <input type="text" class="form-control" name="category" placeholder="Categoria">
			    </div>
			    <div class="form-group">
				    <input type="text" class="form-control" name="name" placeholder="Nombre">
			    </div>
			    <div class="form-group">
				    <input type="text" class="form-control" name="brand" placeholder="Marca">
			    </div>
			    <div class="form-group">
				    <input type="text" class="form-control" name="code" placeholder="Codigo">
			    </div>
			    <div class="form-group">
				    <input type="text" class="form-control decimal" name="price" placeholder="Precio">
			    </div>
			    <button id="btn_create_product" type="button" class="mu_btn btn btn-secondary">Agregar</button>
		    </form>		
		</div>
    </div>

@endsection
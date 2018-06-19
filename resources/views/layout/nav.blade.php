<nav class="navbar navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="{{ route('products.index')}}"><img src="/image/logo.png" alt=""></a>
    <form id="form_search" action="{{ route('search') }}" method="POST">
	  	<div class="input-group" id="search_product">
			<input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon2" name="search">
			<div class="input-group-append">
			    <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
			</div>
		</div>
	</form>
	<div id="right_items">
		<a href="#">
			<div id="nav_category">
				<img src="/image/icon_category.png" alt="">
				<small>Categorias</small>
			</div>
		</a>
		<a href="#">
			<div id="nav_contact">
				<img src="/image/icon_contact.png" alt="">
				<small>Contacto</small>
			</div>
		</a>		
	</div>
	<i class="fas fa-bars" id="toggle_right_items"></i>
</nav>
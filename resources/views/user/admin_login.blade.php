<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/app.css">

    <title> MakeUp | Acceder al sistema </title>
  </head>
  <body>
  	@include('partials.modals')
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img id="logo_brand_login" src="/image/logo.png" alt="Logo">
				</div>
				<div class="col-md-6">
					<div id="login_container">
						<h3>Acceder</h3>
						<h5>Al sistema</h5>
						<form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                  <input type="email" required="required" id="email" class="form-control" placeholder="Ingrese su Usuario" name="email">
              </div>
							<div class="form-group">
							  <input type="password" class="form-control" id="pass" name="password" placeholder="Ingrese su contraseña">
								<button type="submit" class="mu_btn btn btn-secondary">Siguiente</button>
						  </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="logo_foot_container">
      <a href="https://www.instagram.com/marquezagency/" target="_blank">
			 <img src="/image/logo_marquez.png" alt="">
      </a>
		</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @if( $errors->has('email') )
      <script>
        $('#modal_login_system').modal('toggle');
      </script>
    @endif
  </body>
</html>
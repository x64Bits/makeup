<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <style>

    </style>

    <title> MakeUp | Acceder al sistema </title>
  </head>
  <body>
    {{-- <div id="login_bg"></div> --}}
    @include('partials.modals')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="login_container_p">
                    <img src="/image/logo.png" alt="Logo">
                    <form id="login_form" method="" action="#">
                      @csrf 
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" id="username_login" placeholder="Usuario" required value="Invitado" disabled>
                      </div>
                      <div class="form-group">
                        <input name="password" required type="password" class="form-control" id="pass" placeholder=" Ingrese la contraseña de invitado" autofocus>
                      </div>
                      <button id="btn_public_login" class="mu_btn btn btn-secondary">Siguiente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <div id="logo_foot_container">
          <div id="contact_admin"></div>
          <a href="https://www.instagram.com/marquezagency/" target="_blank">
            <img src="/image/logo_marquez.png" alt="">
          </a>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      $(document).ready(function () {
        $('#btn_public_login').click(function() {
          if ( $('#pass').val() == 1234 ) {
            window.location.replace("/catalog/products");
          }
        });

        $('#login_form').submit(function(e) {
          e.preventDefault();
          if ( $('#pass').val() == 1234 ) {
            window.location.replace("/catalog/products");
          }else{
            $('#modal_login').modal('toggle');
          }
        });
      });
    </script>
  </body>
</html>
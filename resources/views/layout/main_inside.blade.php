<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/app.min.css">

    {{-- Toastr CSS --}}
    <link rel="stylesheet" href="/css/toastr.min.css">

    <title> MakeUp | @yield('title') </title>
  </head>
  <body>

    {{-- Se incluye el Preloader --}}
    @include('partials.preloader')
    {{-- Se incluyen las modales --}}
    @include('partials.modals')
    
    @include('layout.nav_inside')

    {{-- Logica de la Flecha Superior Izquierda --}}
    @if( Route::currentRouteName() != 'panel-admin' )
      <a id="back_arrow" href="{{ route('panel-admin') }}">
        <i class="fas fa-arrow-left"></i>
      </a>
    @endif



    <div class="container">
      <h4 id="section_title"> @yield('section_title') </h4>
      
      @yield('content')

    </div>
    
    @include('layout.footer_inside')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/lightbox.min.js"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="/js/toastr.min.js"></script>
    @include('partials.toastr_messages')
  </body>
</html>
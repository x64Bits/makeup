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
    <link rel="stylesheet" href="/css/app.css">

    <title> MakeUp | @yield('title') </title>
  </head>
  <body>

    {{-- Se incluye el Preloader --}}
    @include('partials.preloader')
    {{-- Se incluyen las modales --}}
    @include('partials.modals')
    
    @include('layout.nav')
    {{-- Slider que solo se muestra si se esta en el Index --}}
    @if( Route::currentRouteName() === 'public_catalog')
      @include('layout.slider')
    @endif

    @if( Route::currentRouteName() === 'products.index')
      @include('layout.slider')
    @endif

    {{-- Logica de la Flecha Superior Izquierda --}}
    @if( Route::currentRouteName() === 'catalog' )
      <a id="back_arrow" href="{{ url('products') }}">
        <i class="fas fa-arrow-left"></i>
      </a>
    @endif



    <div class="container">
      <h4 id="section_title"> @yield('section_title') </h4>
      
      @yield('content')

    </div>
    @if( Route::currentRouteName() === 'products.index' || 'public_catalog' )
      @include('layout.footer')
    @else
      @include('layout.footer_inside')
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.jscroll.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/lightbox.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
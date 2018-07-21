<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- NormalizeCSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">

	<!-- PureCSS -->
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

    <!-- STICK CSS -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Custom Styles -->
	<link rel="stylesheet" href="/css/style.min.css">

	<title>MakeUp | @yield('title')</title>
</head>
<body> 
    <!-- NAVBAR -->
    <div class="pure-menu pure-menu-horizontal navbar">
        <a href="{{ route('public_catalog') }}" class="pure-menu-heading">
            <img class="logo_brand" src="/image/logo.png" alt="">
        </a>
        <ul class="pure-menu-list right_objects">

            <form class="pure-form nav_form" action="{{ route('search') }}" method="POST">
                <input type="text" class="pure-input" placeholder="Buscar" name="search">
                <button type="submit" class="pure-button"><i class="fas fa-search"></i></button>
            </form>

            <a href="#" id="link_to_categories" class="nav_right_item" ><i class="fas fa-bars"></i><br> Categorias</a>
            <a href="#" id="link_to_contact" class="nav_right_item" ><i class="fas fa-comments"></i> <br>Contacto</a>
            <a href="#" id="btn_toggle_responsive_menu"><i class="fas fa-bars"></i></a>
        </ul>
    </div>
    <!-- END NAVBAR -->
    <!-- RESPONSIVE MENU -->
    <div class="pure-g responsive_menu"> 
        <form class="pure-form pure-u-1 responsive_nav_form">
            <input type="text" class="pure-input" placeholder="Buscar">
            <button type="submit" class="pure-button"><i class="fas fa-search"></i></button>
        </form>
        <a href="#" class="pure-u-1 responsive_link">
            <div id="link_to_categories2" class="responsive_item"><i class="fas fa-bars"></i> CATEGORIA</div>
        </a>
        <a href="#" class="pure-u-1 responsive_link">
            <div id="link_to_contact2" class="responsive_item"><i class="fas fa-comments"></i> CONTACTO</div>
        </a>
    </div>
    <!-- !-RESPONSIVE MENU -->

    <!-- SLIDER DE IMAGENES -->
    @include('catalog.slider')
    <!-- FIN DEL SLIDER DE IMAGENES -->
    <!-- SLIDER DE IMAGENES -->
    @include('catalog.slider_categories')
    <!-- FIN DEL SLIDER DE IMAGENES -->
    <!-- Product List -->
    @yield('content')
    <!-- !-END PRODUCT LIST -->
    <!-- FOOTER -->
    <div class="pure-menu pure-menu-horizontal footer">
        <div class="pure-u-1-2 contact_container">
            <h3 id="footer_title">CONTACTO</h3>
            <div id="footer_mail">
                <a href="mailto:herneyena001@gmail.com?Subject=Hola%20Estoy%20Interez@%20en%20sus%20productos">
                    <img src="/img/icon_mail.png">
                </a>
                <small id="footer_mail_info">herneyena001@gmail.com</small>
            </div>
            <div id="whats_and_social">
                <div id="footer_whatsapp">
                    <img src="/img/icon_whatsapp.png">
                    <b>Whatsapp</b>
                    <small>+58 424 266 0629</small>
                </div>
                <div id="footer_social">   
                <a href="https://www.facebook.com/makeupvzlaedition">
                    <img src="/img/icon_facebook.png">
                </a> 
                <a href="https://www.instagram.com/makeupvzlaedition/">
                    <img src="/img/icon_instagram.png">
                </a>            
                    <b>Redes Sociales</b>
                    <small>@Makeupvzlaedition</small>
                    <small>fb.com/jhoanherney</small>
                </div>
            </div>
        </div>
        <div class="pure-u-1-2 contact_container">
            <div id="footer_info_right">
                <span><b>Para comprar nuestros productos</b> contactanos por correo, Redes Sociales o Whatsapp</span>
            </div>
        </div>
        <div class="pure-g footer_line_separator"></div>
        <div class="pure-u-1 marquez_container">
            <!-- <div id="marquez_logo"></div> -->
            <img id="marquez" src="/img/logo_marquez.png">
        </div>
    </div>
    <!-- !-END FOOTER -->

    <!-- SCRIPTS -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/slick.min.js"></script>
  <script src="/js/custom.js"></script>
</body>
</html>
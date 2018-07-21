## Version: 2.5.0
  - Se centro el buscador del navbar y se ajusto el responsive para que no tuviera conflictos con el logo.
  - Las flechas direccionales del slider de imagenes se les ha cambiado el color a **blanco**.
  - El slider de categorias ahora tiene **4** categorias por cada seccion.
  - Se ha removido una franja gris que se hacia al rededor del contenedor del producto cuando se cargaba la pagina en ciertas resoluciones, **movil** frecuentemente.
  - Se ha añadido un efecto hover a cada categoria en el slider de categorias.
  - Se ha limitado la cantidad de letras en el titulo del producto a **25**.
  - Se cambio la forma en que se media el tamaño del objeto que tiene un mensaje el footer, era basado en porcentajes ahora es medido en pixeles para que no se distorcione en altas resoluciones.
  - Se han añadido los enlaces de las redes sociales y la accion para enviar un correo en la seccion de contacto.

## Version: 2.4.0
  - Hacia el catalogo ahora se carga la informacion de los productos y de el slider, antes solo se pedian los productos.
  - Cuando se listan productos por categorias tambien se carga la informacion sobre las imagenes que van en el slider.
  - Cuando se realizan busquedas de productos tambien se carga la informacion sobre las imagenes que van en el slider.
  - Se ha cambiado el slider de bootstrap por Slick un slider de secciones sencillo y ultra rapido.
  - Se han añadido las notificaciones con Toastr para el slider de imagenes al cargar las imagenes.
  - Ahora se utilizan iconos de Font-Awesome que son de carga ultra rapida para el navbar.
  - Se rehizo todo el codigo Javascript con jQuery y se agilizaron varias rutinas del mismo codigo :) .
  - Se rehizo completamente componente del producto y se mejoro mucho sobre el codigo anterior, motivo de adaptarse a los nuevos cambios.
  - El componente de la busqueda tambien fue rehecho desde cero para adaptarse a los nuevos cambios.
  - El Slider principal de imagenes fue rehecho completamente para adaptarse al nuevo framework de grillas y a la libreria Slick.
  - El slider de Categorias fue Rehecho completamente para adaptarse al nuevo framework.
  - El catalogo fue Rehecho con PureCSS, una libreria minimalista que permite usar medidas no convencionales y asi lograr estilos mas precisos.
  - Bootstrap ha desaparecido del catalogo, pero aun se usa en todas las demas secciones del proyecto.

## Version: 2.3.1
  - Responsive del Login Publico.

## Version: 2.3.0

   - Ajuste de las imagenes de cada producto en el index del catalogo.
   - Agregado boton de toggle action para visualizar botones de la barra de navegacion.
   - Responsive de el index del catalogo para poder tener 4 columnas de items.
   - Ajuste de las imagenes respetando la relacion de aspecto por sobre el tamaño del objeto padre.
   - Responsive agregado para la mayoria de los tamaños de display.
   - Se corriguieron varias rutinas Javascript para mejorar la velocidad de ejecucion de las llamadas AJAX.

## Version: 2.2.0:

   - CRUD de productos unificados en una sola seccion.
   - Se redujo el Scrip de AJAX a una sola peticion para traer la informacion del proyecto.
   - Correcion de la ruta correcta de las imagenes de cada producto en el index del catalogo.
## Version: 2.1.1:

   - Correccion de bug al subir imagenes del slider.
   - Correccion de la ruta 'admin'.
   - Slider del inicio vinculado a la base datos.
   - Advertencia el la seccion de subir imagenes al slider sobre las dimensiones apropiadas que debe de tener.

## Version: 2.0.0:

   - El Slider del catalogo es dinamico, desde el panel de control es posible administrar las imagenes que se mostraran en ese componente.
   - Scroll infinito el la seccion del catalogo de productos.
   - La vista donde se elegia que tipo de accion se iba a realizar en cuanto al producto se referia ha cambiado, ahora se tiene un menu de dos opciones en las cuales puedes elegir si realizar cambios del slider o de los productos del catalogo.
   - Se agrego una vista para el cambio de imagenes del slider del catalogo.

## Version: 1.0.1:

   - Arreglo en el css referente a footer dentro del panel administrativo, ya que el icono de la agencia no se podia pulsar, en la segunda fase de implementara una mejor posicion al footer haciendo que este se reserve espacio no este flotando.
   - Se cambio la imagen de contacto en el login publico del catalogo, mas resolucion, de mejor aspecto y png.
   - Se soluciono un error que habia al momento de editar productos que no se eliminaba el input con el ID al que se hace referencia para identificar el producto al que realizara dicha accion, al momento de que termina la peticion es eliminado el input con el ID para evitar un 'cache' ficticio.

## Version: 1.0.0:

   - Adicion de datos de contactos en el login de administracion.
   - Remplazo del filtro que solo permitia numeros en el los input de precios al momento crear o editar productos, ha sido remplazado por un filtro que permite numeros y puntos.

  
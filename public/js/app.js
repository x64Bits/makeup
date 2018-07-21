$( document ).ready(function() {

    /*Funcion que se encarga de crear un Nuevo producto*/

    $('#btn_create_product').click(function(){
      
        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#form_crud')[0];

		// Create an FormData object 
        var data = new FormData(form);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/products",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
                console.log("SUCCESS : ", data);
                $("#btn_create_product").prop("disabled", false);
                $('#form_crud').trigger('reset');
                if(data.code == 201) {
                    $('#modal_create').modal('toggle');
                    $('#file_label').css('background-size', 'auto');
                    $('#file_label').css('background-image', 'url(/image/icon_add.png)');
                }

                if(data.hasOwnProperty('errorInfo')) {

                    $('#file_label').css('background-size', 'auto');
                    $('#file_label').css('background-image', 'url(/image/icon_add.png)');
                    if(data.errorInfo[1] == 1062) {
                        $('#modal_create_duplicate').modal('toggle');
                    }else {
                        $('#modal_create_missing').modal('toggle');
                    }
                    
                }
            },
            error: function (e) {
                console.log("ERROR : ", e);
                $("#btn_create_product").prop("disabled", false);

            }
        });

    });

    /*<--! CREAR PRODUCTO NUEVO end--!>*/


    /* Funcion para ELIMINAR PRODUCTOS */

    /*Busqueda del producto a eliminar*/
    $('#delete_search').click(function(){
        var product_code = $('#product_code').val();
        $.get( "/product/delete_show/"+product_code, function( data ) {
            if (jQuery.isEmptyObject(data)) {
                $('#modal_product_no_found').modal('toggle');
            }else {
                var result = data[0];
                $('#input_category').val(result.category);
                $('#input_name').val(result.name);
                $('#input_brand').val(result.brand);
                $('#input_price').val(result.price);
                //$('#file_label').css('background-image');
                //$('#image_path').css('padding')
                $('#form_create').append('<input id="product_id" type="text" hidden="hidden" value="'+result.id+'">');
            }
           
        });   
    });

    /*Funcion que desencadena la eliminacion el Producto*/
    $('#btn_delete_product').click(function(){
        var product_id = $('#product_id').val();
        $('#form_crud').append('<input id="method-input" name="_method" type="hidden" value="DELETE">');
        $.ajax({
            url: '/products/'+product_id,
            type: 'post',
            data: {_method: 'delete'},
            success: function(result) {
                $('#modal_delete').modal('toggle');
                $('#product_id').remove();
                $('#method-input').remove();
                $('#form_create').trigger('reset');
                $('#file_label').css('background-image', 'url(/image/icon_add.png)');
            },
            error: function ( e ) {
                alert('error: ' + e)
                $('#file_label').css('background-image', 'url(/image/icon_add.png)');
            }
        });
    });
    /*Fin de la funcion de eliminar productos*/

    /*Busqueda del producto a EDITAR*/
    $('#edit_search').click(function(){
        var product_code = $('#product_code').val();
        $.get( "/product/edit_show/"+product_code, function( data ) {
            if (jQuery.isEmptyObject(data)) {
                $('#modal_product_no_found').modal('toggle');
            }else {
                var result = data[0];
                $('#input_category').val(result.category);
                $('#input_name').val(result.name);
                $('#input_brand').val(result.brand);
                $('#input_price').val(result.price);
                $('#file_label').css('background-image', 'url("/'+result.image_path+'")');
                $('#file_label').css('background-size', 'contain');
                $('#form_crud').append('<input id="product_id" type="text" hidden="hidden" value="'+result.id+'">');
            }
           
        });   
    });


    /*Funcion que se encarga de EDITAR un producto*/

    $('#btn_edit_product').click(function(){
      
        //stop submit the form, we will post it manually.
        event.preventDefault();

        $('#form_crud').append('<input name="_method" type="hidden" value="PUT">');

        // Get form
        var form = $('#form_crud')[0];

        // Create an FormData object 
        var data = new FormData(form);

        console.log(data)

        var product_id = $('#product_id').val();

        $.ajax({
            // Se envia en metodo POST pero en el form
            // va el input PUT para indicar que va hacia el update,
            // si se especifica el metodo aca no funciona.
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/products/"+product_id,
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
                console.log("SUCCESS : ", data);
                $("#btn_edit_product").prop("disabled", false);
                $('#form_crud').trigger('reset');
                if(data.code == 201) {
                    $('#modal_edit').modal('toggle');
                    $('#product_id').remove();
                    $('#method-input').remove();
                    $('#file_label').css('background-size', 'auto');
                    $('#file_label').css('background-image', 'url(/image/icon_add.png)');
                }

                if(data.hasOwnProperty('errorInfo')) {
                    $('#product_id').remove();
                    $('#method-input').remove();
                    $('#file_label').css('background-size', 'auto');
                    $('#file_label').css('background-image', 'url(/image/icon_add.png)');
                    if(data.errorInfo[1] == 1062) {
                        $('#modal_create_duplicate').modal('toggle');
                    }else {
                        $('#modal_create_missing').modal('toggle');
                    }
                }
            },
            error: function (e) {
                console.log("ERROR : ", e);
                $("#btn_edit_product").prop("disabled", false);

            }
        });

    });

    /*<--! EDITAR PRODUCTO end--!>*/

    $('#nav_contact').click(function(){
        //$('#footer_public').scroll();
        $('html, body').animate({ scrollTop: $('#footer_public').offset().top }, 2000);
        return false;
    });
    $('#nav_category').click(function(){
        $('html, body').animate({ scrollTop: $('#wrapper_to_categories').offset().top }, 1500);
        return false;
    })

    /*Aparecer Preloader al ir atras con la flecha*/

    $('back_arrow').click(function(){
        $(".holder").fadeIn(100); 
    });
});

$(document).ready(function() {
    $(".holder").fadeOut(400);
});

// Funcion para cambiar la imagen
// que se va a subir en la seccion de crear productos
function readURL(input, target) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(target).css('background-image', 'url('+ e.target.result +')');
        }
        
        reader.readAsDataURL(input.files[0]);
    }
    //console.log('hola')
}

// Al cambiar el #image_path se llama la funcion
// readURL pasandole el target y la imagen 
$("#image_path").change(function(){
    readURL(this, '#file_label');
    $('#file_label').css('background-size', 'cover');
})   

$("#slider-file-input").change(function(){
    readURL(this, '#slider-file-label')
    $('#slider-file-label').css('background-size', 'cover')
})

/*$('ul.pagination').hide();
        $(function() {
            $('.card').fadeIn(900)
            $('.infinite-scroll').jscroll({
                debug: true,
                autoTrigger: true,
                loadingHtml: '<img src="https://cdn.dribbble.com/users/69182/screenshots/2179253/animated_loading__by__amiri.gif" alt="Cargando..." />',
                padding: 900,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                    $('.jscroll-added .card').fadeIn(1500)
                }
            });
            $('.jscroll-inner').css('display', 'contents')
        });*/


$('#toggle_right_items').click(function(){
    $('#right_items').toggleClass('right_items_toggle_class')
    $('#form_search').toggleClass('right_items_toggle_class')
})
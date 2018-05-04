$( document ).ready(function() {

    /*Funcion que se encarga de crear un Nuevo producto*/

    $('#btn_create_product').click(function(){
      
        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#form_create')[0];

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
                $('#form_create').trigger('reset');
                if(data.code == 201) {
                	$('#modal_create').modal('toggle');
                }

                if(data.hasOwnProperty('errorInfo')) {

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
    $('#delete_btn').click(function(){
        var product_id = $('#product_id').val();
        $.ajax({
            url: '/products/'+product_id,
            type: 'post',
            data: {_method: 'delete'},
            success: function(result) {
                $('#modal_delete').modal('toggle');
                $('#product_id').remove();
                $('#form_create').trigger('reset');
            },
            error: function ( e ) {
                alert('error: ' + e)
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
                //$('#file_label').css('background-image');
                //$('#image_path').css('padding')
                $('#form_update').append('<input id="product_id" type="text" hidden="hidden" value="'+result.id+'">');
            }
           
        });   
    });


    /*Funcion que se encarga de EDITAR un producto*/

    $('#btn_edit_product').click(function(){
      
        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#form_update')[0];

        // Create an FormData object 
        var data = new FormData(form);

        var product_id = $('#product_id').val();

        $.ajax({
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
                $('#form_update').trigger('reset');
                if(data.code == 201) {
                    $('#modal_edit').modal('toggle');
                }

                if(data.hasOwnProperty('errorInfo')) {

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
    $('.decimal').keyup(function(){
        var val = $(this).val();
        if(isNaN(val)){
             val = val.replace(/[^0-9\.]/g,'');
             if(val.split('.').length>2) 
                 val =val.replace(/\.+$/,"");
        }
        $(this).val(val); 
    })

});

$(document).ready(function() {
    $(".holder").fadeOut(400);
});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#file_label').css('background-image', 'url('+ e.target.result +')');
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#image_path").change(function(){
    readURL(this);
    $('#file_label').css('background-size', 'cover');
})   


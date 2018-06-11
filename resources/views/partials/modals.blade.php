<!-- Modal de la vista de Crear Producto -->
<div class="modal fade" id="modal_create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Operación Exitosa</h5>
        <p>El producto fue Incorporado a la base de datos satisfactoriamente. <br>
        Consulte el <a style="padding:0px;color:#A13161" href="/products">catalogo</a> para observar el articulo nuevo.</p>
      </div>
      <div class="modal-footer">
        <a href="#" id="btn_remove_modal" data-dismiss="modal">OK</a>
      </div>
    </div> 
  </div>
</div>

<!-- Modal de la vista de Editar Producto -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Operación Exitosa</h5>
        <p>El producto fue modificado satisfactoriamente. <br>
        Consulte el catalogo para observar los cambios.</p>
      </div>
      <div class="modal-footer">
        <a href="#" id="btn_remove_modal" data-dismiss="modal">OK</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal de la vista de Eliminar Producto -->
<div class="modal fade" id="modal_delete_ask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>¡ADVERTENCIA!</h5>
        <p>El proceso que esta por ejecutar es permanente ¿está seguro que desea eliminar el producto?.<br>
        <b> Presione eliminar para continuar</b></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button id="delete_btn" type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de la vista de Eliminar Producto -->
<div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Operación Exitosa</h5>
        <p>El producto fue eliminado de la base de datos. <br>
        Consulte el catalogo para observar los cambios.</p>
      </div>
      <div class="modal-footer">
        <a href="#" id="btn_remove_modal" data-dismiss="modal">OK</a>
      </div>
    </div> 
  </div>
</div>

<!-- Modal de la vista de LOGIN del catalogo -->
<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>MakeupVzlaEdition</h5>
        <p>La contraseña que ingresaste no coincide en nuestro registro. <br>
        Contáctanos y solicita el acceso de invitado.</p>
      </div>
      <div class="modal-footer">
        <a href="#" id="btn_remove_modal" data-dismiss="modal">OK</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal de la vista de LOGIN del sistema -->
<div class="modal fade" id="modal_login_system" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>MakeupVzlaEdition</h5>
        <p>El usuario o contraseña no es válido. <br>
        Comuníquese con el administrador del sistema. 
        Contáctanos y solicita el acceso de invitado.</p>
      </div>
      <div class="modal-footer">
        <a href="#" id="btn_remove_modal" data-dismiss="modal">OK</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal de la vista de Producto no encontrado -->
<div class="modal fade" id="modal_product_no_found" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Ops, ha ocurrido un error</h5><br>
        <p>El producto que esta consultando no ha sido encontrado.</p>
      </div>
      <div class="modal-footer">
        <a href="#" id="btn_remove_modal" data-dismiss="modal">OK</a>
      </div>
    </div> 
  </div>
</div>

<!-- Modal de la vista de Producto que falta algun parametro -->
<div class="modal fade" id="modal_create_missing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Ops, ha ocurrido un error</h5><br>
        <p>Es posible que haya olvidado rellenar alguno de los campos de texto o falta la imagen del producto.</p>
      </div>
      <div class="modal-footer">
        <a href="#" id="btn_remove_modal" data-dismiss="modal">OK</a>
      </div>
    </div> 
  </div>
</div>

<!-- Modal de la vista de Producto duplicado -->
<div class="modal fade" id="modal_create_duplicate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Ops, ha ocurrido un error</h5><br>
        <p>El codigo de producto ya se encuentra registrado.</p>
      </div>
      <div class="modal-footer">
        <a href="#" id="btn_remove_modal" data-dismiss="modal">OK</a>
      </div>
    </div> 
  </div>
</div>



<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Configuracion de Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form >
        @csrf
        <div class="modal-body">
        <input style="display:none" id="id_user" ></input>         
        <h5 class="modal-title pb-3"  id="exampleModalLongTitle">Reestablecimiento de contraseña</h5>

        <label>Nueva contraseña:</label>
            <input type="password"  name="password" class="form-control" placeholder="Ingrese la nueva contraseña" id="password" ></input>
            <span class="mb-2"style="color:red" id="message-password"></span><br>

            <label>Confirmar password:</label>
            <input type="password" name="cpassword" class="form-control" placeholder="Confirme la nueva contraseña"  id="cpassword" ></input>
            <span   style="color:red" id="message-cpassword"></span>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="create()" class="btn btn-primary ">Guardar Cambios</button>
  
        </div>
        </form>
      </div>
    </div>
  </div>


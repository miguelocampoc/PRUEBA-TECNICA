

<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Configuracion de Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
        <div class="modal-body">
            <label>Estado del usuario:</label>
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                <option value="administrador">Activo</option>
                <option value="tecnico">Inactivo</option>  
             </select>            
        <br>
        <h5 class="modal-title pb-3"  id="exampleModalLongTitle">Reestablecimiento de contraseña</h5>

        <label>Nueva contraseña:</label>
            <input type="password" class="form-control" placeholder="Ingrese la nueva contraseña" id="marca" ></input>
            <label>Confirmar password:</label>
            <input type="password" class="form-control" placeholder="Confirme la nueva contraseña"  id="marca" ></input>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="create()" class="btn btn-primary ">Guardar Cambios</button>
  
        </div>
        </form>
      </div>
    </div>
  </div>
  <script>
 function  settings (){
          $("#insert").modal({backdrop: "static"});       
          $('#insert').modal('show');        
  }

  function create(){
        Swal.fire({
        title: '¿Estas seguro de editar la informacion?',
        icon: 'warning',
        showCancelButton: true,
        showCloseButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '<span>Acepto</span> ',
        cancelButtonText:'<span>Cancelar</span> '
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Edicion exitosa',
            '<span style="color:white">Sus cambios han sido guardados</span>',
            'success'
            )
        }
        })
  }

</script>

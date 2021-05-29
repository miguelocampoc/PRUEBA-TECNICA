

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
  <script>
 function validate(clave,cclave){
     if(clave==cclave & clave!="" & cclave!="" && clave.length>7 ){
      $('#message-password').text("");
      $('#message-cpassword').text("");

         return true;
     }
     else{
       if(clave==""){
      $('#message-password').text("Este campo no puede estar vacio");
       }
       if(cclave==""){
       $('#message-cpassword').text("Este campo no puede estar vacio");
       }
       if(clave!=cclave & clave!="" & cclave!="" & clave.length>7 ){
        $('#message-password').text("Este campo debe coincidir con el siguiente campo");
        $('#message-cpassword').text("Este campo debe coincidir con el anterior campo");

       }
      
       if(clave!="" & clave.length<=7 ){
        $('#message-password').text("El campo debe tener mas de 7 caracteres");

       }
       if(cclave!="" & cclave.length<=7 ){
        $('#message-cpassword').text("El campo debe tener mas de 7 caracteres");

       }
      
       return false;

     }

 }
  function create()
   {
        id= $('#id_user').val();
        clave=$('#password').val();
        cclave=$('#cpassword').val();
        if(validate(clave,cclave)){
        parametros={"id":id,"clave":clave}
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
           axios.post("/usuarios/setting/"+id,parametros).then(response =>{
             console.log(response.data);
          });
            Swal.fire(
            'Edicion exitosa',
            '<span style="color:white">Sus cambios han sido guardados</span>',
            'success'
            );

        }
        })
        }
        
        
  }


</script>

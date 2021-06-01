
@extends('admin.layout')
@section('content')
<style>
.hidden{
    display:none;
}
</style>
<br>
<div id="app" class="container">
<h3>Usuarios</h3>
<p id="type" class=""></p>


        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
           <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>Apellido</th>
                    <th>cedula</th>
                    <th>estado</th>
                    <th>cargo</th>
                    <th>rol</th>
                    <th>Opciones</th>

                </tr>
            </thead>
            <tbody  >
  
  
            </tbody>

        </table>
</div>
@include('usuarios.settings')

@section('js')
<script>
    var usuarios_all= <?php  echo $users_all ?>;

    /*Datatable */
    
    var table=$('#table_id').DataTable(   
                {
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ registros por pagina",
                        "zeroRecords": "No hay registros",
                        "info": "Mostrando pagina _PAGE_ de _PAGES_",
                        "infoEmpty": "No registros disponibles",
                        "infoFiltered": "(filtrado de _MAX_ total de registros)",
                        "search":         "Buscar:",
                        "paginate": {
                            "first":      "First",
                            "last":       "Last",
                            "next":       "Siguiente",
                            "previous":   "Anterior"
                        },
                    },
                    "data":usuarios_all,
                    "columns": [
                    { "data": "id" ,"className":"hidden"},
                    { "data": "name" },
                    { "data": "apellido" },
                    { "data": "cedula" },
                    { "data": "estado" },
                    { "data": "cargo" },
                    { "data": "rol" },
                    { "defaultContent": " <a  class='btn btn-primary mr-3 ' ><i class='fas fa-pen-alt'></i></a><button  class='btn btn-primary mr-3 setting' ><i class='fas fa-cog'></i></button>"},

                    ]
                }
                );                
                
        /* Fin Datatable */

            $('#table_id tr ').on('click', 'a', function(){
                        var data= table.row($(this).parents("tr")).data();
                        location.href="/usuarios/editar/"+data.id;
                });

                $('#table_id tr ').on('click', 'button.setting', function(){
                        var data= table.row($(this).parents("tr")).data();
                        $("#insert").modal({backdrop: "static"});
                        $('#id_user').val(id);
                        $('#password').val("");
                        $('#cpassword').val("");
                        $('#insert').modal('show'); 
                });

                        
            function usuarios_inactivos(){
                $('#type').text("Estas viendo solo los usuarios inactivos");
                $('#table_id').dataTable().fnClearTable();
                $('#table_id').dataTable().fnAddData(usuarios_ina);

            }
            function usuarios_activos(){
                
                $('#type').text("Estas viendo solo usuarios activos");
                $('#table_id').dataTable().fnClearTable();
                $('#table_id').dataTable().fnAddData(usuarios_act);

            }
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


@endsection

@endsection


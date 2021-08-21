@extends('admin.layout')
@section('content')
<br>
<div class="container pl-3">
<h4>Ver Personas</h4>
<table id="table_id" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <th>n_cedula</th>
      <th>Primer nombre</th>
      <th>Segundo nombre</th>
      <th>Apellidos</th>
      <th>telefono</th>
      <th>tipo</th>
      <th>ciudad</th>

      <th>Opciones</th>

    </thead>
    <tbody>
          @foreach($personas as $persona)
            <tr>
            <td>{{$persona->n_cedula}}</td>
            <td>{{$persona->primer_nombre}}</td>
            <td>{{$persona->segundo_nombre}}</td>
            <td>{{$persona->apellidos}}</td>
            <td>{{$persona->telefono}}</td>
            <td>{{$persona->tipo}}</td>
            <td>{{$persona->ciudad}}</td>

            <td><a href="/ver/persona/edit/{{$persona->id}}" class='btn btn-primary btn-sm mr-3' ><i class='fas fa-pen-alt'></i></a><button onclick="btn_drop({{$persona->id}})" class="btn btn-primary btn-sm far fa-minus-square"></button></td>
              </tr>
          @endforeach
    </tbody>
</table>

</div>
@section('js')
<script>
      
      $('#table_id').DataTable(
        
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
          
      
        }
      
      );

      function btn_drop(id){
        const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success ml-2',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                    })

                    swalWithBootstrapButtons.fire({
                        title: '¿Estas seguro de Eliminar este registro?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si, Eliminar',
                        cancelButtonText: 'No, Cancelar!</div>',
                        reverseButtons: true
                        }).then((result) => {
                        if (result.isConfirmed) {
                         var url="/persona/drop";
                         axios.post(url,{"id":id}).then(response =>{
                           location.href="/ver/personas";
                         });
                            swalWithBootstrapButtons.fire(
                            'Eliminado!',
                            'Su registro ha sido borrado exitosamente',
                            'success'
                            )
                        } else if (
                            /* Read more about handling dismissals below */
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                           
                        }
                        })

      }
      </script>
@endsection
@endsection


@extends('admin.layout')
@section('content')
<br><br>
<div class="container">
<h4>Ver programaciones</h4>
<table id="table_id" class="table table-striped table-bordered" style="width:100%">
<thead>
  <th>Tipo</th>
  <th>pogramacion mes</th>
  <th>programacion semana</th>
  <th>created_at</th>
  <th>updated_at</th>
  <th>Opciones</th>


</thead>
<tbody>
@foreach($programaciones as $programacion)
  <tr>
  <td>{{$programacion->tipo}}</td>
  <td>{{$programacion->p_mes}}</td>
  <td>{{$programacion->p_semana}}</td>
  <td>{{$programacion->created_at}}</td>
  <td>{{$programacion->updated_at}}</td>

  <td><a href="/ver/programaciones/editar/{{$programacion->id}}" class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></i></a><button onclick="btn_drop({{$programacion->id}})" class="btn btn-primary far fa-minus-square"></button></td>
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
                         var url="/programacion/drop";
                         axios.post(url,{"id":id}).then(response =>{
                           location.href="/ver/programaciones";
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


@extends('admin.layout')
@section('content')
<br><br>
<div class="container">
<h4>Ver Ordenes</h4>
<table id="table_id" class="table table-striped table-bordered" style="width:100%">
<thead>
  <th>Tipo</th>
  <th>Placa</th>
  <th>Peso</th>
  <th>Producto que carga o descarga</th>
  <th>Opciones</th>


</thead>
<tbody>
@foreach($ordenes as $orden)
  <tr>
  <td>{{$orden->tipo}}</td>
  <td>{{$orden->placa}}</td>
  <td>{{$orden->peso}}</td>

  <td>{{$orden->pcd}}</td>
  <td><a href="/ver/ordenes/editar/{{$orden->id}}" class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></i></a><button onclick="btn_drop({{$orden->id}})" class="btn btn-primary far fa-minus-square"></button></td>
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
                         var url="/orden/drop";
                         axios.post(url,{"id":id}).then(response =>{
                           location.href="/ver/ordenes";
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


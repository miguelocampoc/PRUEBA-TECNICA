@extends('admin.layout')
@section('content')
<br>
<div class="container pl-3">
<h4>Ver Vehiculos</h4>
<table id="table_id" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <th>Placa</th>
      <th>color</th>
      <th>marca</th>
      <th>tipo vehiculo</th>
      <th>Detalles</th>
      <th>Opciones</th>

    </thead>
    <tbody>
          @foreach($vehiculos as $vehiculo)
            <tr>
            <td>{{$vehiculo->placa}}</td>
            <td>{{$vehiculo->color}}</td>
            <td>{{$vehiculo->marca}}</td>
            <td>{{$vehiculo->tipo_vehiculo}}</td>
            <td><a href="/ver/vehiculo/{{$vehiculo->id}}/detalles" class="btn btn-primary" >Mas informacion</a></td>
            <td><a href="/ver/vehiculos/edit/{{$vehiculo->id}}" class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></i></a><button onclick="btn_drop({{$vehiculo->id}})" class="btn btn-primary far fa-minus-square"></button></td>
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
                         var url="/vehiculo/drop";
                         axios.post(url,{"id":id}).then(response =>{
                           location.href="/ver/vehiculos";
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


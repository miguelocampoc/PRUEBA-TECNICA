
@extends('admin.layout')
@section('content')

<br>
<div class="container">
<h3>Listar Permisos de trabajos</h3>
<br>
        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
           <thead>
                <tr>
                    <th>Creado por:</th>
                    <th>Fecha creacion</th>
                    <th>Fecha modficacion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($permisos as $permiso)
                <tr>
                    <td>{{$permiso->name}} {{$permiso->apellido}} </td>
                    <td>{{$permiso->created_at}} </td>
                    <td>{{$permiso->updated_at}} </td>
                    <td> <a type='button' href="/permisos/visualizar_permiso/{{$permiso->id}}" class='btn btn-primary mr-3' ><i class='fas fa-tasks'></i></a></td>

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
      </script>
@endsection
@endsection

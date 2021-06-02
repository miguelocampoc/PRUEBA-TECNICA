
@extends('admin.layout')
@section('content')

<br>
<div class="container">
<h3>Listar reportes de Inspeccion Motocicletas</h3>
<table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
        <thead>
             <tr>
                 <th>Creado por</th>
                 <th>Fecha creacion</th>
                 <th>Fecha actualizacion</th>
                 <th>Opciones</th>

          

             </tr>
         </thead>
         <tbody>
             @foreach($formatos as $formato)
          <tr>
              <td>{{$formato->name}} {{$formato->apellido}}</td>
              <td>{{$formato->created_at}} </td>
              <td>{{$formato->updated_at}}</td>
         
              <td><a href="/reportes/editar/motocicletas/{{$formato->id}}" class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></a></td>
         </tr> 
               @endforeach
         
         </tbody>
     </table>
</div>

@include('usuarios.settings')
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

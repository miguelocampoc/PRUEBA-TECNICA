
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container">
<h3>Motocicletas Registradas</h3>
<br>
        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
           <thead>
                <tr>
                    <th>Placa</th>
                    <th>Propietario</th>
                    <th>Marca</th>
                    <th>modelo</th>
                    <th>Vigencia Tecnomecanica</th>
                    <th>Vigencia Soat</th>
                    <th>Creado el</th>
                    <th>Modificado el</th>
                    <th>Opciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
             <tr>
                 <td>{{$data->placa}}</td>
                 <td>{{$data->name}} {{$data->apellido}}</td>

                 <td>{{$data->marca}}</td>
                 <td>{{$data->modelo}}</td>
                 <td>{{$data->vigenciatecnicomecanica}}</td>
                 <td>{{$data->vigenciasoat}}</td>
                 <td>{{$data->created_at}}</td>
                 <td>{{$data->updated_at}}</td>
                 <td><a href="/ver/motocicletas/editar/{{$data->id}}" class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></a></td>
            </tr> 
                  @endforeach
            
            </tbody>
        </table>
</div>
@section('js')
@include('usuarios.settings')
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

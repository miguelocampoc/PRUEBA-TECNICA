
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container" id="app">
        @if (session('status'))
        <div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show" role="alert">
          {{ session('status') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
<h3>Escaleras Registradas</h3>
<br>
        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
           <thead>
                <tr>
                    <th>Tipo </th>
                    <th>Codigo Serie </th>
                    <th>estado </th>
                    <th>Creado </th>
                    <th>Modificado </th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                     @foreach($escalerasdata as $escalera)
                     <tr>
                     <td>{{$escalera->tipo}}</td>
                     <td>{{$escalera->codigo_serie}}</td>
                     <td>{{$escalera->estado}}</td>
                     <td>{{$escalera->created_at}}</td>
                     <td>{{$escalera->updated_at}}</td>
                     <td><a href="/ver/escaleras/editar/{{$escalera->id}}"   class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></i></a></td>
                     </tr>
                     @endforeach 
            </tbody>
        </table>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
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

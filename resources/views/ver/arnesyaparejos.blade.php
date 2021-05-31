
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container">
<h3>Arnes y Aparejos Registrados</h3>
<br>
        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
           <thead>
                <tr>
                    <th>Propietario</th>
                    <th>Serial</th>
                    <th>Estado</th>
                    <th>Tipo</th>
                    <th>Creado</th>
                    <th>Modificado</th>
                    <th>Opciones</th>

                </tr>
            </thead>

            <tbody>
            @foreach($ayp as $ayp)
            <tr>
             <td>{{$ayp->name}}{{$ayp->apellido}}</td>
             <td>{{$ayp->serial}}</td>
             <td>{{$ayp->estado}}</td>
             <td>{{$ayp->tipo}}</td>
             <td>{{$ayp->created_at}}</td>
             <td>{{$ayp->updated_at}}</td>
             <td><a href="/ver/arnesyaparejos/editar/{{$ayp->id}}" class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></a></td>
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

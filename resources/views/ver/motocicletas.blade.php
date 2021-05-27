
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
                    <th>Creado por:</th>
                    <th>Fecha de creacion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Administrador</td>
                    <td>2021-05-16 16:10:15</td>
                    <td><a type='button' href="/usuarios/editar/" class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></i></a></td>

                </tr>
              
           
            </tbody>
        </table>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@include('usuarios.settings')
@endsection

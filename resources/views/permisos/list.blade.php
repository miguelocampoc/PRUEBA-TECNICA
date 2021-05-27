
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container">
<h3>Listar Permisos de trabajos</h3>
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
                    <td>Darwin cruz Soto </td>
                    <td>2021-05-14 16:12:11</td>
                    <td> <!--<a type='button' href="/usuarios/editar/" class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></i></a>!--><a class="btn btn-primary"><i class="far fa-eye"></i></a> <span class="ml-3"></span><a class="btn btn-success"><i class="fas fa-tasks"></i></a></td>

                </tr>
              
           
            </tbody>
        </table>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@include('usuarios.settings')
@endsection

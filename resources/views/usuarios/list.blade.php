
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container">
<h3>Usuarios</h3>
<br>
        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        <p class="pb-3">Ver usuarios Inactivos <i  style="cursor:pointer;" class="far fa-eye "></i> <!--<i  style="cursor:pointer;" class="far fa-eye-slash "></i>!--></p>   
        
           <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>email</th>
                    <th>Creado en</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Administrador</td>
                    <td>  </td>
                    <td>administrador@example.com</td>
                    <td>2021-05-10 17:02:45</td>
                    <td><a type='button' href="/usuarios/editar/" class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></i></a><a type="button"  onclick="settings()" class='btn btn-dark ' ><i class="fas fa-cog"></i></a></td>

                </tr>
                <tr>
                    <td>Darwin</td>
                    <td> Cruz Soto </td>
                    <td>darwincruz.soto@gmail.com</td>
                    <td>2021-05-12 14:54:47</td>
                    <td><a type='button' href="/usuarios/editar/" class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></i></a><a type="button" href="/usuarios/destroy/" onclick="" class='btn btn-dark ' ><i class="fas fa-cog"></i></a></td>

                </tr>
                <tr>
                    <td>Tecnico</td>
                    <td>  </td>
                    <td>tecnico2@example.com</td>
                    <td>2021-05-20 10:12:23</td>
                    <td><a type='button' href="/usuarios/editar/" class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></i></a><a type="button" href="/usuarios/destroy/" onclick="" class='btn btn-dark ' ><i class="fas fa-cog"></i></a></td>

                </tr>
           
            </tbody>
        </table>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@include('usuarios.settings')
@endsection


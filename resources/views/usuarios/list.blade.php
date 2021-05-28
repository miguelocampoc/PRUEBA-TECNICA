
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div id="app" class="container">
<h3>Usuarios</h3>
<p id="type" class=""></p>
<button type="button"  class="btn btn-primary far fa-eye " @click="usuariosall()" style="cursor:pointer;" ></button> 
<span class="pr-2"></span>
<button  class="btn btn-primary far fa-eye-slash"  @click="usuarios_activos()"  style="cursor:pointer;"></button>
<br><br>

        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
           <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>email</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody v-for="usuario of usuarios">
              <td>@{{usuario.name}}</td>
              <td>@{{usuario.apellido}}</td>
              <td> @{{usuario.email}}</td>
              <td><button type='button' @click="btneditar(usuario.id)"  class='btn btn-primary mr-3' ><i class='fas fa-pen-alt'></i></button><button type="button"  @click="settings(usuario.id)" class='btn btn-dark ' ><i class="fas fa-cog"></i></button></td>
            </tbody>

        </table>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
@include('usuarios.settings')
@include('usuarios.list_script')

@endsection


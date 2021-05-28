
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container">
        <form method="POST" action="/motocicletas/store" >
    @csrf
     <h4>Crear motocicletas</h4>
    <div class="row">
                <div class="col-xl-4  mb-4">
                <p>Nombre del propietario</p>
                <input type="text" name="id_propietario" class="form-control" placeholder="Nombre del propietario">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Placa del vehiculo</p>
                <input type="text" name="placa" class="form-control" placeholder="Nombre del propietario">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Marca</p>
                <input type="text" name="marca" class="form-control" placeholder="Nombre del propietario">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Modelo</p>
                <input type="text" name="modelo" class="form-control" placeholder="Nombre del propietario">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Vigencia Tecnomecanica</p>
                <input type="date"name="vigenciatecnicomecanica" class="form-control" placeholder="Nombre del propietario">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Vigencia Soat</p>
                <input type="date" name="vigenciasoat" class="form-control" placeholder="Nombre del propietario">     
                </div>
         
    </div>
     <button class="btn btn-primary">Crear Motocicleta</button>
</form>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@include('usuarios.settings')
@endsection

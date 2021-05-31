
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container">
    @if (session('status'))
    <div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @endif
        <form method="POST" action="/motocicletas/store" >
    @csrf
     <h4>Crear motocicletas</h4>
    <div class="row">
                <div class="col-xl-4  mb-4">
                <p>Nombre del propietario</p>
                <select id="id_propietario" name="id_propietario" class="form-control" id="exampleFormControlSelect1"  >
                <option value="">Ninguno</option>

                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}} {{$user->apellido}}</option>
                @endforeach
               
              </select>
               <!-- <input type="text" name="id_propietario" class="form-control" placeholder="Nombre del propietario">!-->
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

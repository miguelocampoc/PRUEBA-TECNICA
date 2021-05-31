
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container">
        <form method="POST" action="" >
    @csrf
     <h4>Editar motocicleta</h4>
    <div class="row">
                <div class="col-xl-4  mb-4">
                <p>Nombre del propietario</p>
                        <select id="id_propietario" name="id_propietario" class="form-control" id="exampleFormControlSelect1"  >
                        <option value="{{$propietario->id_propietario}}">{{$propietario->name}} {{$propietario->apellido}}</option>
                         @foreach($usuarios as $usuario)
                         @if($propietario->id_propietario!=$usuario->id)
                         <option value="{{$usuario->id}}">{{$usuario->name}} {{$usuario->apellido}}</option>
                          @endif
                         @endforeach
                       
                    </select>
                </div>
                <div class="col-xl-4  mb-4">
                <p>Placa del vehiculo</p>
                <input type="text" name="placa" class="form-control" placeholder="Nombre del propietario" value="{{$data->placa}}">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Marca</p> 
                <input type="text" name="marca" class="form-control" placeholder="Nombre del propietario"  value="{{$data->marca}}">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Modelo</p>
                <input type="text" name="modelo" class="form-control" placeholder="Nombre del propietario" value="{{$data->modelo}}">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Vigencia Tecnomecanica</p>
                <input type="date"name="vigenciatecnicomecanica" class="form-control" placeholder="Nombre del propietario" value="{{$data->vigenciatecnicomecanica}}">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Vigencia Soat</p>
                <input type="date" name="vigenciasoat" class="form-control" placeholder="Nombre del propietario" value="{{$data->vigenciasoat}}">     
                </div>
         
    </div>
     <button class="btn btn-primary">Editar Motocicleta</button>
</form>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@endsection

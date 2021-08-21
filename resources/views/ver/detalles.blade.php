@extends('admin.layout')

@section('content')
<br>
<div class="container pl-3">
<h3>Informacion del vehiculo placa:{{$vehiculo->placa}}</h3>

    <div class="row">
        <div class="col-xl-3"><h5>Placa:</h5><p>{{$vehiculo->placa}}</p></div>
        <div class="col-xl-3"><h5>Color:</h5><p>{{$vehiculo->color}}</p></div>
        <div class="col-xl-3"><h5>Marca:</h5><p>{{$vehiculo->marca}}</p></div>
        <div class="col-xl-3"><h5>Tipo de vehiculo:</h5><p>{{$vehiculo->tipo_vehiculo}}</p></div>
        </div>
        <h4>Conductor:</h5>

        <div class="row">
        <div class="col-xl-3"><h5>Nombre Completo:</h4><p>{{$conductor->primer_nombre}} {{$conductor->segundo_nombre}} {{$conductor->apellidos}}</p></div>
        <div class="col-xl-3"><h5>Direccion:</p><p>{{$conductor->direccion}}</p></div>
        <div class="col-xl-3"><h5>Telefono:</h5><p>{{$conductor->telefono}}</p></div>
        <div class="col-xl-3"><h5>Ciudad:</p><p>{{$conductor->ciudad}}</p></div>
        </div>
        <h4>Propietario:</h4>
        <div class="row">
            <div class="col-xl-3"><h5>Nombre Completo:</p><p>{{$propietario->primer_nombre}}{{$propietario->segundo_nombre}}{{$propietario->apellidos}}</p></div>
            <div class="col-xl-3"><h5>Direccion:</p><p>{{$propietario->direccion}}</p></div>
            <div class="col-xl-3"><h5>Telefono:</p><p>{{$propietario->telefono}}</p></div>
            <div class="col-xl-3"><h5>ciudad:</p><p>{{$propietario->ciudad}}</p></div>
         </div>


</div>
@endsection


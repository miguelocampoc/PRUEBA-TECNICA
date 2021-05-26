
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container">
     <h4>Crear Arnes y Aparejos</h4>
    <div class="row">
                <div class="col-xl-4  mb-4">
                <p>Propietario</p>
                <input type="text" class="form-control" placeholder="Nombre del propietario">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Serial</p>
                <input type="text" class="form-control" placeholder="Nombre del propietario">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Estado</p>
                <input type="text" class="form-control" placeholder="Nombre del propietario">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Tipo</p>
                <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                       <option value="administrador">--</option>
                        <option value="administrador">Aceptado</option>
                        <option value="tecnico">No aceptado</option>                
                        </select>                
                        
                </div>
              
         
    </div>
     <button class="btn btn-primary">Crear Arnes y Aparejo</button>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@include('usuarios.settings')
@endsection

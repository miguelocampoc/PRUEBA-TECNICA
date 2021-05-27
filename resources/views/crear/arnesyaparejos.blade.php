
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container">
        <form method="POST" action="/arnesyaparejos/store" >
            @csrf
     <h4>Crear Arnes y Aparejos</h4>
    <div class="row">
                <div class="col-xl-4  mb-4">
                <p>Propietario</p>
                <input type="text"name="id_propietario" class="form-control" placeholder=" propietario">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Serial</p>
                <input type="text" name="serial" class="form-control" placeholder="Serial">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Estado</p>
                <input type="text" name="estado"class="form-control" placeholder="Estado">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Tipo</p>
                <select id="rol" name="tipo" class="form-control" id="exampleFormControlSelect1">
                       <option value="administrador">--</option>
                        <option value="administrador">Aceptado</option>
                        <option value="tecnico">No aceptado</option>                
                        </select>                
                        
                </div>
              
         
    </div>
     <button class="btn btn-primary">Crear Arnes y Aparejo</button>
    </form>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@include('usuarios.settings')
@endsection

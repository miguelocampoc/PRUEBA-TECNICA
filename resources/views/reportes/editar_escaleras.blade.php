@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container">
        <form method="POST" action="/escaleras/store" >
            @csrf
     <h4>Crear Escaleras</h4>
    <div class="row">
                <div class="col-xl-4  mb-4">
                <p>Tipo</p>
                <select id="tipo" name="tipo" class="form-control" id="exampleFormControlSelect1"  >
                <option value="ninguno">ninguno</option>
                <option value="escalera_doble">escalera doble seccion</option>
                <option value="escalera_tijera">escalera de Tijeras</option>
                <option value="escalera_plegable">escalera Plegable</option>

                </select>              
                </div>
                <div class="col-xl-4  mb-4">
                <p>Codigo de serie</p>
                <input type="text" name="codigo_serie" class="form-control" placeholder="Codigo de serie">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Estado</p>
                <select id="estado" name="estado" class="form-control" id="exampleFormControlSelect1"  >
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>

                </select>                  
                </div>
              
         
    </div>
     <button class="btn btn-primary">Crear Escalera</button>
    </form>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@include('usuarios.settings')
@endsection


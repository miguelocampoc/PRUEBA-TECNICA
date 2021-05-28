
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
                <input type="text"name="tipo" class="form-control" placeholder="Tipo">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Codigo de serie</p>
                <input type="text" name="codigo_serie" class="form-control" placeholder="Codigo de serie">     
                </div>
                <div class="col-xl-4  mb-4">
                <p>Estado</p>
                <input type="text" name="estado" class="form-control" placeholder="Estado">     
                </div>
              
         
    </div>
     <button class="btn btn-primary">Crear Escalera</button>
    </form>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@include('usuarios.settings')
@endsection

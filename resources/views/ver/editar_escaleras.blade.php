
@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<br>
<div class="container">
        <form method="POST" action="/escaleras/update/{{ $data->id }}" >
            @csrf
     <h4>Editar Escalera</h4>
    <div class="row">
                <div class="col-xl-4  mb-4">
                <p>Tipo</p>
                <select id="tipo" name="tipo" class="form-control" id="exampleFormControlSelect1"  >
                <option value="{{$data->tipo}}">{{$data->tipo}}</option>
                @if($data->tipo!="ninguno")
                <option value="ninguno">ninguno</option>
                @endif
                @if($data->tipo!="escalera_doble")
                <option value="escalera_doble">escalera doble seccion</option>
                @endif
                @if($data->tipo!="escalera_tijera")
                <option value="escalera_tijera">escalera de Tijeras</option>
                @endif
                @if($data->tipo!="escalera_plegable")
                <option value="escalera_plegable">escalera Plegable</option>
                @endif
                </select>    
                @error('tipo')
                <div style="color:red">{{ $message }}</div>
                @enderror          
                </div>
                <div class="col-xl-4  mb-4">
                <p>Codigo de serie</p>
                <input type="text" name="codigo_serie" class="form-control" placeholder="Codigo de serie" value="{{$data->codigo_serie}}">
                @error('codigo_serie')
                <div style="color:red">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-xl-4  mb-4">
                <p>Estado</p>
                <select id="estado" name="estado" class="form-control" id="exampleFormControlSelect1"  >
                 <option value="{{$data->estado}}">{{$data->estado}}</option>
                 @if($data->estado!="activo")
                <option value="activo">activo</option>
                @endif
                @if($data->estado!="inactivo")
                <option value="inactivo">inactivo</option>
                @endif
              
                </select>   
                @error('placa')
                <div style="color:red">{{ $message }}</div>
                @enderror               
                </div>
              
         
    </div>
     <button class="btn btn-primary">Editar Escalera</button>
    </form>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@include('usuarios.settings')
@endsection

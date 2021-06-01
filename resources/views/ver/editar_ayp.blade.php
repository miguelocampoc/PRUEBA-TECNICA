
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
        <form method="POST" action="/arnesyaparejos/update/{{ $data->id }}" >
            @csrf
     <h4>Editar Arnes y Aparejo</h4>
    <div class="row">
                <div class="col-xl-4  mb-4">
                <p>Propietario</p>
                    <select id="id_propietario" name="id_propietario" class="form-control" id="exampleFormControlSelect1">
                    <option value="{{$propietario->id_propietario}}">{{$propietario->name}} {{$propietario->apellido}}</option>
                    @foreach($usuarios as $usuario)
                    @if($propietario->id_propietario!=$usuario->id)
                    <option value="{{$usuario->id}}">{{$usuario->name}} {{$usuario->apellido}}</option>
                     @endif
                    @endforeach
                    </select>   
                    @error('id_propietario')
                    <div style="color:red">{{ $message }}</div>
                    @enderror             
                 </div>
                <div class="col-xl-4  mb-4">
                <p>Serial</p>
                <input type="text" name="serial" class="form-control" placeholder="Serial" value="{{ $data->serial }}">     
                </div>
                @error('serial')
                <div style="color:red">{{ $message }}</div>
                @enderror
                <div class="col-xl-4  mb-4">
                <p>Estado</p>
                        <select id="estado" name="estado" class="form-control" id="exampleFormControlSelect1">
                                        <option value="{{$data->estado}}">{{$data->estado}}</option>
                                        @if($data->estado!="activo")
                                       <option value="activo">activo</option>
                                       @endif
                                       @if($data->estado!="inactivo")
                                       <option value="inactivo">inactivo</option>
                                       @endif
                            </select>  
                            @error('estado')
                            <div style="color:red">{{ $message }}</div>
                            @enderror              
                 </div>
                <div class="col-xl-4  mb-4">
                <p>Tipo</p>
                <select id="rol" name="tipo" class="form-control" id="exampleFormControlSelect1">
                        <option value="doble seccion">Doble seccion</option>
                        <option value="tijeras">Tijeras</option>
                        <option value="plegable">Plegable</option>                
           
                        </select>                
                        
                </div>
              
         
    </div>
     <button class="btn btn-primary">Crear Arnes y Aparejo</button>
    </form>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@include('usuarios.settings')
@endsection

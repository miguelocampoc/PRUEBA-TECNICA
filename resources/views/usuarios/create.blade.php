@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<form  enctype="multipart/form-data" action="/usuarios/store" method="POST">
@csrf
<div  class="container"><br>
@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<h3 class="mt-5">Crear nuevo usuario</h3><br>

<div class="row">
        <div class="col-xl-4  mb-4">
    
        <p>Nombre:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{old('nombre')}}" >
        @error('nombre')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Apellido:</p> 
        <input id="apellido" name="apellido" type="text" class="form-control" value="{{old('apellido')}}">
        @error('apellido')
        <div  style="color:red;" >{{ $message }}*</div>
        @enderror
        </div>
        <div class="col-xl-4 mb-4">
        <p>Email:</p>
        <input id="email" name="email" type="email" class="form-control"  value="{{old('email')}}">
        @error('email')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Clave:</p>
        <input  id="clave" name="clave" type="password" class="form-control" >
        @error('clave')
        <div style="color:red;" >{{ $message }}*</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4" >
        <p>Numero de contacto:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control" value="{{old('contacto')}}">
        @error('contacto')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Cedula:</p>
        <input  id="cedula"  name="cedula" type="text" class="form-control" value="{{old('cedula')}}">
        @error('cedula')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Licencia moto:</p>
        <input id="licencia_moto"  name="licencia_moto" type="text" class="form-control" value="{{old('licencia_moto')}}">
        @error('licencia_moto')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Cargo:</p>
        <input id="cargo" name="cargo" type="text" class="form-control" value="{{old('cargo')}}">
        @error('cargo')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Rol:</p>
        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1"  value="{{old('rol')}}">
                <option value="administrador">Administrador</option>
                <option value="tecnico"   >Tecnico</option>
                <option value="ca">Cordinador de alturas</option>
         
        </select>
        @error('rol')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
      
        <div class="col-xl-4  mb-4">
        <p>Foto:</p>
        <input  id="foto_perfil" name="foto_perfil" type="file" class="form-control-file" id="exampleFormControlFile1" value="{{old('foto_perfil')}}">
        @error('foto_perfil')
        <div  style="color:red;" >{{ $message }}*</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Foto Firma:</p>
        <input  id="foto_firma" name="foto_firma" type="file" class="form-control-file" id="exampleFormControlFile1" value="{{old('foto_firma')}}">
        @error('foto_firma')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
    
</div>
<button class="btn btn-primary" onclick="RegisterUser()"> Registrar Usuario</button>

</form>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@endsection

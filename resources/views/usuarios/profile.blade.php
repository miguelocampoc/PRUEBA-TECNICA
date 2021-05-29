@extends('admin.layout')
@section('content')
<br>
<div class="container">
<h2>Mi perfil</h2>
<p>Su rol es:{{Auth::user()->rol }}</p>
<form  enctype="multipart/form-data" action="/usuarios/edit_profile" method="POST">
@csrf
<div class="row">
        <div class="col-xl-4  mb-4">
    
        <p>Nombre:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{Auth::user()->name}}">
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Apellido:</p> 
        <input id="apellido" name="apellido" type="text" class="form-control" value="{{Auth::user()->apellido}}">
        @error('apellido')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4 mb-4">
        <p>Email:</p>
        <input id="email" name="email" type="email" class="form-control" value="{{Auth::user()->email}}">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
      
        <div class="col-xl-4  mb-4" >
        <p>Numero de contacto:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control" value="{{Auth::user()->contacto}}">
        @error('contacto')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Cedula:</p>
        <input id="cedula"  name="cedula" type="text" class="form-control"  value="{{Auth::user()->cedula}}">
        @error('cedula')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Licencia moto:</p>
        <input id="licencia_moto"  name="licencia_moto" type="text" class="form-control" value="{{Auth::user()->licencia_moto}}">
        @error('licencia_moto')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Cargo:</p>
        <input id="cargo" name="cargo" type="text" class="form-control"  value="{{Auth::user()->cargo}}">
        @error('cargo')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
      
        </div>
        <div class="col-xl-4  mb-4">
      
        </div>
        <div class="col-xl-4  mb-4">
        <p>Foto:</p>
        <input  id="foto_perfil" name="foto_perfil" type="file" class="form-control-file  mb-3" id="exampleFormControlFile1">
        <p>La foto actual es:  </p>

        <img  height="200px" width="200px" src="/storage/{{Auth::user()->foto_perfil }}"  alt="" srcset="">

        @error('foto_perfil')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Foto Firma:</p>
        <input  id="foto_firma" name="foto_firma" type="file" class="form-control-file mb-3" id="exampleFormControlFile1">
        <p>La  firma actual es:  </p>        <br><br>
        <img  height="200px" width="200px" src="/storage/{{Auth::user()->foto_firma }}" alt="" srcset="">

        @error('foto_firma')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    
</div>
<button class="btn btn-primary" onclick="RegisterUser()"> Editar Usuario</button>

</form>
<br>
</div>
@endsection

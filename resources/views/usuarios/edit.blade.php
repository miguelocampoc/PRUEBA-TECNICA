@extends('admin.layout')
@section('content')
<br>
<div class="container">
<h2>Editar usuario</h2>
<form  enctype="multipart/form-data" action="/usuarios/update/{{$user->id}}" method="POST">
@csrf
<div class="row">
        <div class="col-xl-4  mb-4">
    
        <p>Nombre:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$user->name}}">
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Apellido:</p> 
        <input id="apellido" name="apellido" type="text" class="form-control" value="{{$user->apellido}}">
        @error('apellido')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4 mb-4">
        <p>Email:</p>
        <input id="email" name="email" type="email" class="form-control" value="{{$user->email}}">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
      
        <div class="col-xl-4  mb-4" >
        <p>Numero de contacto:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control" value="{{$user->contacto}}">
        @error('contacto')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Cedula:</p>
        <input id="cedula"  name="cedula" type="text" class="form-control"  value="{{$user->cedula}}">
        @error('cedula')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Licencia moto:</p>
        <input id="licencia_moto"  name="licencia_moto" type="text" class="form-control" value="{{$user->licencia_moto}}">
        @error('licencia_moto')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Cargo:</p>
        <input id="cargo" name="cargo" type="text" class="form-control"  value="{{$user->cargo}}">
        @error('cargo')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Rol:</p>
        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                <option value="administrador">Administrador</option>
                <option value="tecnico">Tecnico</option>
                <option value="hse">HSE</option>
         
        </select>
        @error('rol')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Estado:</p>
        <select id="estado" name="estado" class="form-control" id="exampleFormControlSelect1">
                <option value="administrador">Activo</option>
                <option value="tecnico">Inactivo</option>
         
        </select>
        @error('rol')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Foto:</p>
        <input  id="foto_perfil" name="foto_perfil" type="file" class="form-control-file  mb-3" id="exampleFormControlFile1">
        <p>La foto actual es:  </p>

        <img width="100px" src="{{asset('darwin.jpeg') }}" alt="" srcset="">

        @error('foto_perfil')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Foto Firma:</p>
        <input  id="foto_firma" name="foto_firma" type="file" class="form-control-file mb-3" id="exampleFormControlFile1">
        <p>La  firma actual es:  </p>        <br><br>
        <img  width="200px"src="{{asset('firmadarwin.jpeg') }}" alt="" srcset="">

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

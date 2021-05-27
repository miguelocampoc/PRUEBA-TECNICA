@extends('admin.layout')
@section('content')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<form  enctype="multipart/form-data" action="/usuarios/store" method="POST">
@csrf
<div  class="container">
<h3 class="mt-5">Crear nuevo usuario</h3><br>

<div class="row">
        <div class="col-xl-4  mb-4">
    
        <p>Nombre:</p>
        <input id="nombre" name="nombre" type="text" class="form-control">
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Apellido:</p> 
        <input id="apellido" name="apellido" type="text" class="form-control">
        @error('apellido')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4 mb-4">
        <p>Email:</p>
        <input id="email" name="email" type="email" class="form-control">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Clave:</p>
        <input  id="clave" name="clave" type="password" class="form-control">
        @error('clave')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4" >
        <p>Numero de contacto:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control">
        @error('contacto')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Cedula:</p>
        <input id="cedula"  name="cedula" type="text" class="form-control">
        @error('cedula')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Licencia moto:</p>
        <input id="licencia_moto"  name="licencia_moto" type="text" class="form-control">
        @error('licencia_moto')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Cargo:</p>
        <input id="cargo" name="cargo" type="text" class="form-control">
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
        <p>Foto:</p>
        <input  id="foto_perfil" name="foto_perfil" type="file" class="form-control-file" id="exampleFormControlFile1">
        @error('foto_perfil')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
        <p>Foto Firma:</p>
        <input  id="foto_firma" name="foto_firma" type="file" class="form-control-file" id="exampleFormControlFile1">
        @error('foto_firma')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    
</div>
<button class="btn btn-primary" onclick="RegisterUser()"> Registrar Usuario</button>

</form>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script>
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'El usuario ha sido registrado',
  showConfirmButton: false,
  timer: 1500
})

</script>
@endsection

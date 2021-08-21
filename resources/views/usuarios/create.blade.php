@extends('admin.layout')
@section('content')

<div  class="container pl-3"><br>
@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<h3 class="mt-2">Crear nuevo usuario</h3><br>
<form method="POST"  action="/usuarios/store" >
@csrf
<div class="row">
        <div class="col-xl-4  mb-4">
    
        <p>Nombre:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{old('nombre')}}" >
        @error('nombre')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
        <div class="col-xl-4  mb-4">
    
        <p>Email:</p>
         <input id="email" name="email" type="emaikl" class="form-control" value="{{old('email')}}" >
          @error('email')
            <div  style="color:red;">{{ $message }}*</div>
          @enderror
             </div>
        
        <div class="col-xl-4  mb-4">
        <p>Clave:</p>
        <input  id="clave" name="clave" type="password" class="form-control" >
        @error('clave')
        <div style="color:red;" >{{ $message }}*</div>
        @enderror
        </div>
     
  
        <div class="col-xl-4  mb-4">
        <p>Tipo:</p>
        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1"  value="{{old('rol')}}">
                <option value="administrador">Administrador</option>
    
        </select>
    
        </div>
 
 
  
      
    
</div>
<button class="btn btn-primary" > Registrar Usuario</button>

</form>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@endsection

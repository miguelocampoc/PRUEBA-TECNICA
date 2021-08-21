@extends('admin.layout')
@section('content')
<br>
<div class="container">
<a href="/usuarios/listar" class="btn btn-primary "><i class="fas fa-backward"></i></a><br><br>

@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<h2>Editar usuario</h2>
<form  enctype="multipart/form-data" action="/usuarios/update/{{$user->id}}" method="POST">
@csrf
<div class="row">
        <div class="col-xl-4  mb-4">
    
        <p>Nombre:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$user->name}}">
        @error('nombre')
        <div style="color:red">{{ $message }}</div>
        @enderror
        </div>

        <div class="col-xl-4 mb-4">
        <p>Email:</p>
        <input id="email" name="email" type="email" class="form-control" value="{{$user->email}}">
        @error('email')
        <div style="color:red">{{ $message }}</div>
        @enderror
        </div>
      
 

        <div class="col-xl-4  mb-4">
        <p>Rol:</p>
        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1"  value="{{old('rol')}}">
                <option value="administrador">Administrador</option>

         
        </select>
        @error('rol')
        <div style="color:red">{{ $message }}</div>
        @enderror
        </div>

      
        
        
     
    
</div>
<button class="btn btn-primary"> Editar Usuario</button>

</form>
<br>
</div>
@endsection

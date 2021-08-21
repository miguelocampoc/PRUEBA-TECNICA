@extends('admin.layout')
@section('content')
<br>
<div class="container  pl-3">
@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<form method="POST" action="/persona/store">
@csrf
         <h3> Crear Conductor o Propietario</h3>
         <br>
          <div class="row ">
          <div class="col-xl-4">
                <p>Tipo de  Persona</p>
                <select id="tipo" name="tipo" class="form-control">
                <option value="Conductor">Conductor</option>
                <option value="Propietario">Propietario</option>

                 </select>
                @error('tipo')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror   
                </div>
                <div class="col-xl-4">
                <p>numero de cedula</p>
                <input name="numero_de_cedula" type="text" class="form-control mb-3">
                @error('numero_de_cedula')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror   
                </div>
                <div class="col-xl-4">
                <p>Primer Nombre </p>
                <input  name="primer_nombre" type="text" class="form-control mb-3">
                @error('primer_nombre')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror   
                </div>
                <div class="col-xl-4">
                <p>Segundo Nombre</p>
                <input  name="segundo_nombre" type="text" class="form-control mb-3">
                @error('segundo_nombre')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror
                </div>
                <div class="col-xl-4">
                <p>Apellidos</p>
                <input name="apellidos" type="text" class="form-control mb-3">
                @error('apellidos')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror
                </div>
                <div class="col-xl-4">
                <p>Direccion</p>
                <input name="direccion" type="text" class="form-control mb-3">
                @error('direccion')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror
                </div>
                <div class="col-xl-4">
                <p>Telefono</p>
                <input name="telefono" type="text" class="form-control mb-3">
                @error('telefono')
                <div   style="color:red;" >{{ $message }}</div>
                 @enderror
                </div>
                <div class="col-xl-4">
                <p>Ciudad</p>
                <input name="ciudad" type="text" class="form-control mb-3">
                @error('ciudad')
                <div   style="color:red;" >{{ $message }}</</div>
                 @enderror
                </div>



          </div>
          <div class="col-xl-4">
          </div>
          <button type="submit" class="btn btn-primary">Registrar Vehiculo</button>

</form>

</div>

@endsection

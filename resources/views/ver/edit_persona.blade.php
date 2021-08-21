@extends('admin.layout')
@section('content')
<br>
<div class="container pl-3">
@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<a href="/ver/personas" class="btn btn-primary  btn-sm"><i class="fas fa-backward"></i></a><br><br>

<h3>Editar Conductor o Propietario</h3><br>


<form action="/persona/update/{{$persona->id}}" method="POST">
@csrf
<div class="row">
<div class="col-xl-3">
<p>Cedula</p><br>
<input type="text" name="cedula" class="form-control" value="{{$persona->n_cedula}}" >
@error('cedula')<div   style="color:red;" >{{ $message }}</</div>
@enderror
</div>
<div class="col-xl-3">

<p>Primer Nombre</p><br>
<input type="text"  name="primer_nombre"   class="form-control"  value="{{$persona->primer_nombre}}">
@error('primer_nombre')<div   style="color:red;" >{{ $message }}</div>
@enderror
</div>
<div class="col-xl-3">

<p>Segundo Nombre</p><br>
<input type="text" name="segundo_nombre"  class="form-control"   value="{{$persona->segundo_nombre}}">
@error('segundo_nombre')<div   style="color:red;" >{{ $message }}</div>
@enderror
</div>
<div class="col-xl-3">

<p>Apellidos</p><br>
<input type="text"   name="apellidos"   class="form-control"  value="{{$persona->apellidos}}">
@error('apellidos')<div   style="color:red;" >{{ $message }}</div>
@enderror
</div>
<div class="col-xl-3">

<p>direccion</p><br>
<input type="text" name="direccion"   class="form-control"  value="{{$persona->direccion}}">
@error('direccion')<div   style="color:red;" >{{ $message }}</div>
@enderror
</div>
<div class="col-xl-3">

<p>telefono</p><br>
<input type="text" name="telefono" class="form-control"  value="{{$persona->telefono}}">
@error('telefono')<div   style="color:red;" >{{ $message }}</div>
@enderror
</div>
<div class="col-xl-3">

<p>tipo</p><br>
<select  class="form-control"  id="tipo" name="tipo">
<option value="{{$persona->tipo}}">{{$persona->tipo}}</option>

<option value="Conductor" >Conductor</option>
<option value="Propietario">Propietario</option>

</select>
@error('tipo')<div   style="color:red;" >{{ $message }}</div>
@enderror
</div>
<div class="col-xl-3">

<p>ciudad</p><br>
<input type="text" value="{{$persona->ciudad}}" name="ciudad"  class="form-control" >
@error('ciudad')<div   style="color:red;" >{{ $message }}</div>
@enderror
</div>
<div class="col-xl-3">
<br>

<button class="btn btn-primary" type="submit">Registrar</button>
</div>
</form>

</div>

</div>
@endsection
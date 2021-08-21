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
<form method="POST" action="/vehiculos/store">
@csrf
         <h3> Crear Vehiculo</h3>
         <br>
          <div class="row">
                <div class="col-xl-4">
                <p>Placa</p>
                <input name="placa" type="text" class="form-control mb-3" value="{{old('placa')}}">
                @error('placa')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror   
                </div>
                <div class="col-xl-4">
                <p>color</p>
                <input  name="color" type="text" class="form-control mb-3" value="{{old('color')}}">
                @error('color')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror   
                </div>
                <div class="col-xl-4">
                <p>Marca</p>
                <input  name="marca" type="text" class="form-control mb-3"  value="{{old('marca')}}">
                @error('marca')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror
                </div>
                <div class="col-xl-4">
                <p>Tipo de vehiculo</p>
                <select id="tipo_vehiculo" name="tipo_vehiculo" class="form-control"   >
                              <option value="Particular"> Particular  </option>
                              <option value="Publico"> Publico  </option>

                          </select>                
                @error('tipo_vehiculo')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror
                </div>
               
                <div class="col-xl-4">
                    <p>Conductor:</p>
                        <select id="conductor" name="conductor" class="form-control"   >

                          @foreach($conductores as $conductor)
                              <option value="{{$conductor->id}}">{{$conductor->primer_nombre}} {{$conductor->segundo_nombre}} {{$conductor->apellidos}}

                              </option>
                             @endforeach
                      </select>
                      @error('conductor')
                      <div   style="color:red;" >{{ $message }}*</div>
                      @enderror
              </div>
              <div class="col-xl-4">
                    <p>Propietario:</p>
                        <select id="propietario" name="propietario" class="form-control"   >
                        @foreach($propietarios as $propietario)

                              <option value="{{$propietario->id}}">{{$propietario->primer_nombre}} {{$propietario->segundo_nombre}} {{$propietario->apellidos}}</option>
                              @endforeach
                      </select>
                      @error('propietario')
                      <div   style="color:red;" >{{ $message }}*</div>
                      @enderror
              </div>
             
               

          </div>
          <br>
          <button type="submit" class="btn btn-primary">Registrar Vehiculo</button>
</form>
</div>

@endsection

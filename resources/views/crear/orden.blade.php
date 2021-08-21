@extends('admin.layout')
@section('content')
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
<form method="post" action="/orden/store">
@csrf
         <h3> Crear Orden</h3>
         <br>
          <div class="row">
          <div class="col-xl-4">
                    <p> Tipo: </p>
                    <select id="tipo" name="tipo" class="form-control" >
                                    <option value="">-----</option>
                                    <option value="entrada">Entrada</option>
                                    <option value="salida">Salida</option>
                            </select>     
                @error('tipo')
                <div   style="color:red;" >{{ $message }}*</div>
               @enderror   
            </div>
           
                <div class="col-xl-4">
                <p> Escribe la Placa</p>
                <input  name="placa" type="text" class="form-control mb-3">
                @error('placa')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror   
                </div>
               
                <div class="col-xl-4">
                <div class="form-group">
                                <label for="exampleFormControlTextarea1">Producto que carga o descarga</label>
                                <textarea name="pcd" class="form-control" id="pcd" rows="3"></textarea>
                        </div>
                @error('pcd')
                <div   style="color:red;" >El campo es obligatorio</div>
                 @enderror 
                </div>
                <div class="col-xl-4">
                <p> Peso </p>
                <input  name="peso" type="text" class="form-control mb-3">
                @error('peso')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror   
                </div>
                <div class="col-xl-4">
                <p> Dir. Destino</p>
                <input  name="ddestino" type="text" class="form-control mb-3">
                @error('ddestino')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror
                 </div>
          </div>
          <button type="submit" class="btn btn-primary">Crear orden</button>
</form>
</div>

@endsection
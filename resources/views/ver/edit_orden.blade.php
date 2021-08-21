@extends('admin.layout')
@section('content')
<br>
<div class="container">
<a href="/ver/ordenes" class="btn btn-primary "><i class="fas fa-backward"></i></a><br><br>

@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<form method="post" action="/orden/update/{{$orden->id}}">
@csrf
         <h3> Editar Orden</h3>
         <br>
          <div class="row">
          <div class="col-xl-4">
                    <p> Tipo: </p>
                    <select id="tipo" name="tipo" class="form-control" >
                                    <option value="{{$orden->tipo}}">{{$orden->tipo}}</option>
                                    @if($orden->tipo!="entrada")
                                    <option value="entrada">Entrada</option>
                                    @endif
                                    @if($orden->tipo!="salida")
                                    <option value="salida">Salida</option>
                                    @endif
                            </select>  
                @error('tipo')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror    
            </div>

                <div class="col-xl-4">
                <p> Escribe la Placa</p>
                <input  name="placa" type="text" class="form-control mb-3" value="{{$orden->placa}}">
                @error('placa')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror 
                </div>
                
                <div class="col-xl-4">
                <div class="form-group">
                                <label for="exampleFormControlTextarea1">Producto que carga o descarga</label>
                                <textarea value="{{$orden->pcd}}" name="pcd" class="form-control" id="pcd" rows="3">{{$orden->pcd}}</textarea>
                        </div>
                @error('pcd')
                <div   style="color:red;" >Este es campo es obligatorio</div>
                 @enderror   
                </div>
                <div class="col-xl-4">
                <p> Peso </p>
                <input  name="peso"  value="{{$orden->peso}}" type="text" class="form-control mb-3">
                @error('peso')
                <div   style="color:red;" >{{ $message }}*</div>
                 @enderror   
                </div>
                <div class="col-xl-4">
                <p> Dir. Destino</p>
                <input  name="ddestino" type="text" class="form-control mb-3" value="{{$orden->ddestino}}">
                @error('ddestino')
                <div   style="color:red;" >Este campo es obligatorio</div>
                 @enderror
                 </div>
          </div><br>
          <button type="submit" class="btn btn-primary">Editar Orden</button>
</form>
</div>
@section('js')
<script>

</script>
@endsection
@endsection
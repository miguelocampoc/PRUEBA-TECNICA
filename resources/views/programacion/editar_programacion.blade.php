@extends('admin.layout')
@section('content')
<br>
<div class="container">
<a href="/ver/programaciones" class="btn btn-primary "><i class="fas fa-backward"></i></a><br><br>

@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<h3>Editar programacion de vehiculos de entrada(carga)</h3>
<form method="POST" action="/programaciones/update/{{$programacion->id}}">
@csrf
 <div class="row">
           <div class="col-xl-4">
                    <p> Tipo: </p>
                    <select id="tipo" name="tipo" class="form-control" >
                                    <option value="{{$programacion->tipo}}">{{$programacion->tipo}}</option>
                                    @if($programacion->tipo!="semanal")
                                    <option value="semanal">Semanal</option>
                                    @endif
                                    @if($programacion->tipo!="mensual")
                                    <option value="mensual">Mensual</option>
                                    @endif
                    </select>     
        @error('tipo')
        <div style="color:red;">{{ $message }}*</div>
        @enderror           

            </div>
            <div class="col-xl-4">
                    <p> Mes </p>
                        <input name="p_mes" type="month" class="form-control" value="{{$programacion->p_mes}}">
             @error('p_mes')
              <div style="color:red;">Este campo es obligatorio</div>
            @enderror       

            </div>
            <div class="col-xl-4">
                    <p> Semana </p>
                        <input name="p_semana" type="week"  value="{{$programacion->p_semana}}" class="form-control mb-3">
             @error('p_semana')
             <div style="color:red;">Este campo es obligatorio</div>
             @enderror   

            </div>
       
            <div class="col-xl-4">
                <div class="form-group">
                                <label for="exampleFormControlTextarea1">Placas vehiculos</label>
                                <textarea value="{{$programacion->pv}}" name="pv" class="form-control" id="pv" rows="3">{{$programacion->pv}}</textarea>
                        </div>
                        @error('pv')
                                <div style="color:red;">Este campo es obligatorio</div>
                        @enderror   
                </div>
 </div>
 <br>
<button type="submit" class="btn btn-primary">Editar Programacion</button>
</form>
</div>

@endsection


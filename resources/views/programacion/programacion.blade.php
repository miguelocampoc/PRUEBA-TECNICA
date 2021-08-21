@extends('admin.layout')
@section('content')
<br><br>
<div class="container">
@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<h3>Crear programacion de vehiculos de entrada(carga)</h3>
<form method="POST" action="/programaciones/store">
@csrf
 <div class="row">
           <div class="col-xl-4">
                    <p> Tipo: </p>
                    <select id="tipo" name="tipo" class="form-control" >
                                    <option value="">-----</option>
                                    <option value="semanal">Semanal</option>
                                    <option value="mensual">Mensual</option>
                    </select>     
        @error('tipo')
        <div style="color:red;">{{ $message }}*</div>
        @enderror     

            </div>
            <div class="col-xl-4">
                    <p> Mes </p>
                        <input name="p_mes" type="month" class="form-control">
        @error('p_mes')
        <div style="color:red;">Este campo es obligatorio</div>
        @enderror  

            </div>
            <div class="col-xl-4">
                    <p> Semana </p>
                        <input name="p_semana" type="week" class="form-control mb-3">
            @error('p_semana')
             <div style="color:red;">Este campo es obligatorio</div>
             @enderror     

            </div>
       
            <div class="col-xl-4">
                <div class="form-group">
                                <label for="exampleFormControlTextarea1">Placas vehiculos</label>
                                <textarea name="pv" class="form-control" id="pv" rows="3"></textarea>
                                @error('pv')
                                <div style="color:red;">Este campo es obligatorio</div>

                                @enderror     

                        </div>
                </div>
 </div>
 <br>
<button type="submit" class="btn btn-primary">Guardar Programacion</button>
</form>
</div>

@endsection


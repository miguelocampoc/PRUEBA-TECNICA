@extends('admin.layout')
@section('content')

<br>
<div class="container">
<h3 >Crear inspeccion escaleras</h3>
<h4>Inspeccion Pre-uso escalera</h4>
    <div class="row">
            <div class="col-xl-4  mb-4">
                    <p>TRABAJO</p>
                    <input id="nombre" name="nombre" type="text" class="form-control">
            </div>
      
            <div class="col-xl-4  mb-4">
                    <p>TIPO ESCALERA</p>
                    <input id="nombre" name="nombre" type="text" class="form-control">
            </div>
            <div class="col-xl-4  mb-4">
                    <p>FECHA</p>
                    <input id="nombre" name="nombre" type="date" class="form-control">
            </div>
    </div>
    <div class="row">
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>OBSERVACIONES</p>
                                <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>CONCLUSION-ESCALERA APTA PARA SER USADA</p>
                    <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>     
                       </select>                        
            </div>
            <div class="col-xl-4  mb-4">
                    <p>JUSTIFICACIÓN:</p>
                    <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"></textarea>
           
            </div>
            </div>
      
  
        
                        <button class="btn btn-primary" onclick="RegisterUser()"> Registrar Inspeccion</button>
                        <br>
                        <br>

</div>
@endsection

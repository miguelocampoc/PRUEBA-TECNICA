@extends('admin.layout')
@section('content')

<br>
<div class="container">
 <form  method="POST"   action="/reportes/create_reporte_escaleras">
 @csrf
<h3 >Crear inspeccion escaleras</h3>
<h4>Inspeccion Pre-uso escalera</h4>
    <div class="row">
            <div class="col-xl-4  mb-4">
                    <p>TRABAJO</p>
                    <input id="trabajo" name="trabajo" type="text" class="form-control">
            </div>
      
            <div class="col-xl-4  mb-4">
                    <p>TIPO ESCALERA</p>
                    <input id="tipo_escalera" name="tipo_escalera" type="text" class="form-control">
            </div>
            <div class="col-xl-4  mb-4">
                    <p>FECHA</p>
                    <input id="fecha" name="fecha" type="date" class="form-control">
            </div>
    </div>
    <div class="row">
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="largueros" name="largueros" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Peldaños(antideslizantes, no torcidos y en buen estado)</p>
                    <select id="peldaños" name="peldaños" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Union de peldaños y largueros</p>
                    <select id="union_peldaños" name="union_peldaños" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Zapatas antideslizantes</p>
                    <select id="zapatas" name="zapatas" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Piezas de ajuste (tornillos,pernos,otros)</p>
                    <select id="Piezas_ajuste" name="piezas_ajuste" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Aseo de escalera (libre de sustancias deslizantes)</p>
                    <select id="aseo_escalera" name="aseo_escalera" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Identificacion legible en la escalera</p>
                    <select id="identificacion" name="identifiacion" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Cuenta con señalizacion de seguridad en peldaño</p>
                    <select id="señalizacion" name="señalizacion" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Brazos de union anti-apertura (aplica para escaleras tipo tijera)</p>
                    <select id="brazos_antiapertura" name="brazos_antiapertura" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>ganchos trabapeldaños (aplica en tijeras extensibles)</p>
                    <select id="ganchos_trabapeldaños" name="ganchos_trabapeldaños" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">Correcto</option>
                        <option value="tecnico">Incorrecto</option>     
                        <option value="tecnico">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                <p>Guias externas para union de largueros (aplica tijeras extensibles)</p>
                <select id="guias_externas_union" name="guias_externas_union" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">Correcto</option>
                    <option value="tecnico">Incorrecto</option>     
                    <option value="tecnico">No aplica</option>     

                    </select>
        </div>
            <div class="col-xl-4  mb-4">
                    <p>OBSERVACIONES</p>
                                <textarea class="form-control " id="exampleFormControlTextarea1" name="observaciones" rows="3"></textarea>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>CONCLUSION-ESCALERA APTA PARA SER USADA</p>
                    <select id="conclusion" name="conclusion" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-----</option>
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>     
                       </select>                        
            </div>
            <div class="col-xl-4  mb-4">
                    <p>JUSTIFICACIÓN:</p>
                    <textarea class="form-control " id="exampleFormControlTextarea1" rows="3" name="justifiacion"></textarea>
           
            </div>
            </div>
      
  
        
                        <button class="btn btn-primary" onclick="RegisterUser()"> Registrar Inspeccion</button>
                        <br>
                        <br>

</div>
@endsection

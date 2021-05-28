@extends('admin.layout')
@section('content')
<br><br>
<div class="container">
<h3>Crear inspeccion Motocicletas</h3>
<form  enctype="multipart/form-data" action="/ReportesController/create_reporte_motocicletas" method="POST">
@csrf
<div class="row">
        <div class="col-xl-4  mb-4">
                <p>Placa</p>
                <input id="nombre" name="placa" type="text" class="form-control">
                @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4  mb-4">
                <p>Marca</p> 
                <input id="apellido" name="marca" type="text" class="form-control">
                @error('apellido')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4 mb-4">
                <p>Modelo:</p>
                <input id="email" name="modelo" type="email" class="form-control">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4 mb-4">
                <p>Conductor:</p>
                <input id="email" name="conductor" type="email" class="form-control">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4  mb-4">
                <p>Licencia de transito</p>
                        <select id="rol" name="licencia_transito" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>     
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Revision Tecnomecanica Vigente</p>
                        <select id="rol" name="reivision_tecnico" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>     
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Fecha Vigente</p>
                     <input type="fecha_vigente" class="form-control">
                </div>
                <div class="col-xl-4  mb-4">
                <p>Soat vigente</p>
                <select id="rol" name="soat_vigente" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>     
                        </select>
                </div>
                <div class="col-xl-4  mb-4">
                <p>KM INICIAL:</p>
                <input type="km_inicial" class="form-control"> 
                </div>
                <div class="col-xl-4  mb-4">
                <p>KM FINAL:</p>                
                <input type="km_final" class="form-control"> 
                </div>
                <div class="col-xl-4  mb-4">
                <p>TOTAL KM</p>
                <input type="km_total" class="form-control"> 
                </div>
            
  
         </div>

        <h4>DATOS DE INSPECCION</h4>
        <div class="row">
            <div class="col-xl-4  mb-4">
                <p>INSPECCIONADO POR
                <input type="text" name="inspeccionado" class="form-control"> 

                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>CARGO:
                <input type="text"  name="cargo" class="form-control">      
                </div>
                <div class="col-xl-4  mb-4">
                <p>FECHA
                <input type="date" name="fecha" class="form-control">

                </div>
              
         </div>
        
          <h4>PREOPERACIONAL DIARIA</h4>
          <h5>Elementos a Inspeccionar </h5>
          <div class="row">
            <div class="col-xl-4 mb-4">
            <p>ESTADO Y PRESION DE RUEDAS (VISUAL)
            <input type="text" name="estado ruedas" class="form-control">      

            </div>
            <div class="col-xl-4 mb-4">
            <p>BATERIA
            <input type="text" name="bateria" class="form-control">      

            </div>
            <div class="col-xl-4 mb-4">
            <p>SISTEMA LUCES (Delanteras, traseras, freno y direccionales)
            <input type="text" name="luces" class="form-control">      
        
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESPEJOS COMPLETOS
            <input type="text" name="espejos" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESTADO Y TENSIÓN DE LA CADENA
            <input type="text" name="estado_cadena" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>FRENO DELANTERO 
            <input type="text" name="freno_delantero" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>FRENO TRASERO
            <input type="text" name="freno_trasero" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>BOCINA O PITO
            <input type="text" name="bocina"class="form-control">      
          
            </div>
         
          </div>
          <h4>LIMPIEZA Y DESINFECCION</h4>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>Se realizo limpieza del vehiculo
            <select id="limpieza" name="limpieza" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select>       
            </div>
            <div class="col-xl-4 mb-4">
            <p>Esta el vehiculo organizado en su interio
            <select id="vehiculo_organizado" name="vehiculo_organizado" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>Se realizo desinfeccion de llaves, botones, palancas de cambios, palanca de frenos, manubrio y todas las superficies de contacto.
            <select id="desinfeccion" name="desinfeccion" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select> 
            </div>

       
          </div>
          <h4>ESTADO DE SALUD DEL CONDUCTOR  </h4>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR RECIBIÓ CAPACITACION RESPECTO A LOS RIESGOS DEL TRANSITO, LOS CONOCE Y ACEPTA CONDUCIR DE MANERA DEFENSIVA
            <select id="capacitacion" name="capacitacion" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR MANIFIESTA NO HABER CONSUMIDO ALCOHOL, SUSTANCIAS PSICOACTIVAS, BEBIDAS O ALIMENTOS QUE LE PONGAN EN RIESGO A EL O A TERCEROS
            <select id="consumo_bebidas" name="consumo_bebidas" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR SE ENCUENTRA EN CONDICONES DE SALUD APTAS PARA CONDUCIR
            <select id="trabajador_salud" name="trabajador_salud" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select> 
            </div>
        
          
          </div>
          <h4>ELEMENTOS A INSPECCIONAR</h4>
             <div class="row">
             <div class="col-xl-4 mb-4">
            <p>LABRADO DE RUEDAS 3mm (VISUAL)
                        <select  name="labrado_ruedas" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CAMBIO DE ACEITE
            <select id="cambio_aceite" name="cambio_aciete" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CAMBIO DE FILTRO
            <select id="cambio_filtro" name="cambio_filtro" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>EMBRAGUE AJUSTADO Y SUAVE
            <select id="embrague" name="embrague" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>KIT DE ARRASTE
            <select id="kit_arrastre" name="kit_arrastre" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CONTROL DE FUGAS (Aceite y gasolina)
            <select id="control_fugas" name="control_fugas" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESTADO DE AMORTIGUADORES
            <select id="amortiguadores" name="amortiguadores" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>EXOSTO - SILENCIADOR
            <select id="exosto" name="exosto" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
        
            <div class="col-xl-4 mb-4">
            <p>CASCO Y CHALECO DEL CONDUCTOR
            <select id="casco_chaleto_conductor" name="casco_chaleto_conductor" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>

            <div class="col-xl-4 mb-4">
            <p>CAJA DE HERRAMIENTAS (Llave expansiva, destornilladores -pala y estrella, llaves fijas, alicate, llave bujía)
            <select id="caja_herramientas" name="caja_herramientas" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
           
             
             
             </div>
             <h4>OBSERVACIONES</h4>
                        <div class="form-group">
                                <label for="exampleFormControlTextarea1">Registre sus observaciones</label>
                                <textarea name="observaciones" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
             <button class="btn btn-primary" onclick="RegisterUser()"> Registrar Inspeccion</button>
             <br><br>
          </div>
         


</form>
</div>
@endsection


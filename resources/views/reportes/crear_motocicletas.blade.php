@extends('admin.layout')
@section('content')
<br><br>
<div class="container">
<h3>Crear inspeccion Motocicletas</h3>
<form  enctype="multipart/form-data" action="/usuarios/store" method="POST">
@csrf
<div class="row">
        <div class="col-xl-4  mb-4">
                <p>Placa</p>
                <input id="nombre" name="nombre" type="text" class="form-control">
                @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4  mb-4">
                <p>Marca</p> 
                <input id="apellido" name="apellido" type="text" class="form-control">
                @error('apellido')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4 mb-4">
                <p>Modelo:</p>
                <input id="email" name="email" type="email" class="form-control">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4 mb-4">
                <p>Conductor:</p>
                <input id="email" name="email" type="email" class="form-control">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4  mb-4">
                <p>Licencia de transito</p>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>     
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Revision Tecnomecanica Vigente</p>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>     
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Fecha Vigente</p>
                     <input type="date" class="form-control">
                </div>
                <div class="col-xl-4  mb-4">
                <p>Soat vigente</p>
                <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>     
                        </select>
                </div>
                <div class="col-xl-4  mb-4">
                <p>KM INICIAL:</p>
                <input type="text" class="form-control"> 
                </div>
                <div class="col-xl-4  mb-4">
                <p>KM FINAL:</p>                
                <input type="text" class="form-control"> 
                </div>
                <div class="col-xl-4  mb-4">
                <p>TOTAL KM</p>
                <input type="text" class="form-control"> 
                </div>
            
  
         </div>

        <h4>DATOS DE INSPECCION</h4>
        <div class="row">
            <div class="col-xl-4  mb-4">
                <p>INSPECCIONADO POR
                <input type="text" class="form-control"> 

                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>CARGO:
                <input type="text" class="form-control">      
                </div>
                <div class="col-xl-4  mb-4">
                <p>FECHA
                <input type="date" class="form-control">

                </div>
              
         </div>
        
          <h4>PREOPERACIONAL DIARIA</h4>
          <h5>Elementos a Inspeccionar </h5>
          <div class="row">
            <div class="col-xl-4 mb-4">
            <p>ESTADO Y PRESION DE RUEDAS (VISUAL)
            <input type="text" class="form-control">      

            </div>
            <div class="col-xl-4 mb-4">
            <p>BATERIA
            <input type="text" class="form-control">      

            </div>
            <div class="col-xl-4 mb-4">
            <p>SISTEMA LUCES (Delanteras, traseras, freno y direccionales)
            <input type="text" class="form-control">      
        
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESPEJOS COMPLETOS
            <input type="text" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESTADO Y TENSIÓN DE LA CADENA
            <input type="text" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>FRENO DELANTERO 
            <input type="text" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>FRENO TRASERO
            <input type="text" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>BOCINA O PITO
            <input type="text" class="form-control">      
          
            </div>
         
          </div>
          <h4>LIMPIEZA Y DESINFECCION</h4>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>Se realizo limpieza del vehiculo
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select>       
            </div>
            <div class="col-xl-4 mb-4">
            <p>Esta el vehiculo organizado en su interio
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>Se realizo desinfeccion de llaves, botones, palancas de cambios, palanca de frenos, manubrio y todas las superficies de contacto.
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select> 
            </div>

       
          </div>
          <h4>ESTADO DE SALUD DEL CONDUCTOR  </h4>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR RECIBIÓ CAPACITACION RESPECTO A LOS RIESGOS DEL TRANSITO, LOS CONOCE Y ACEPTA CONDUCIR DE MANERA DEFENSIVA
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR MANIFIESTA NO HABER CONSUMIDO ALCOHOL, SUSTANCIAS PSICOACTIVAS, BEBIDAS O ALIMENTOS QUE LE PONGAN EN RIESGO A EL O A TERCEROS
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR SE ENCUENTRA EN CONDICONES DE SALUD APTAS PARA CONDUCIR
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">SI</option>
                        <option value="tecnico">NO</option>                
                        </select> 
            </div>
        
          
          </div>
          <h4>ELEMENTOS A INSPECCIONAR</h4>
             <div class="row">
             <div class="col-xl-4 mb-4">
            <p>LABRADO DE RUEDAS 3mm (VISUAL)
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CAMBIO DE ACEITE
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CAMBIO DE FILTRO
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>EMBRAGUE AJUSTADO Y SUAVE
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>KIT DE ARRASTE
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CONTROL DE FUGAS (Aceite y gasolina)
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESTADO DE AMORTIGUADORES
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>EXOSTO - SILENCIADOR
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>
        
            <div class="col-xl-4 mb-4">
            <p>CASCO Y CHALECO DEL CONDUCTOR
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                <option value="administrador">B-Bueno</option>
                                <option value="tecnico">R-Regular</option>
                                <option value="tecnico">M-Malo</option>
                                <option value="hse">NT-No Tiene</option>
                        
                        </select>
            </div>

            <div class="col-xl-4 mb-4">
            <p>CAJA DE HERRAMIENTAS (Llave expansiva, destornilladores -pala y estrella, llaves fijas, alicate, llave bujía)
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
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
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
             <button class="btn btn-primary" onclick="RegisterUser()"> Registrar Inspeccion</button>
             <br><br>
          </div>
         


</form>
</div>
@endsection


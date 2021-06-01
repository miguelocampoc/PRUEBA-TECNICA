@extends('admin.layout')
@section('content')

<br><br>
<div class="container">
<h3>Crear inspeccion Motocicletas</h3>
<form id="formulario">
@csrf
<div class="row">
        <div class="col-xl-4  mb-4">
                <p>Placa</p>
                <input id="placa" name="placa" type="text" class="form-control">
                @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4  mb-4">
                <p>Marca</p> 
                <input id="marca" name="marca" type="text" class="form-control">
                @error('apellido')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4 mb-4">
                <p>Modelo:</p>
                <input id="modelo" name="modelo" type="text" class="form-control">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4 mb-4">
                <p>Conductor:</p>
                <input id="conductor" name="conductor" type="text" class="form-control">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4  mb-4">
                <p>Licencia de transito</p>
                        <select id="licencia_transito" name="licencia_transito" class="form-control" id="exampleFormControlSelect1">
                        <option value="">-----</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>     
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Revision Tecnomecanica Vigente</p>
                        <select id="revision_tecnico" name="revision_tecnico" class="form-control" id="exampleFormControlSelect1">
                        <option value="">-----</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>     
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Fecha Vigente</p>
                     <input type="text" id="fecha_vigente" name="fecha_vigente"  class="form-control">
                </div>
                <div class="col-xl-4  mb-4">
                <p>Soat vigente</p>
                <select id="soat_vigente" name="soat_vigente" class="form-control" id="exampleFormControlSelect1">
                        <option value="">-----</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>     
                        </select>
                </div>
                <div class="col-xl-4  mb-4">
                <p>KM INICIAL:</p>
                <input type="text" id="km_inicial" name="km_inicial" class="form-control"> 
                </div>
                <div class="col-xl-4  mb-4">
                <p>KM FINAL:</p>                
                <input type="text" id="km_final" name="km_final" class="form-control"> 
                </div>
                <div class="col-xl-4  mb-4">
                <p>TOTAL KM</p>
                <input type="text" id="km_total" name="km_total"  class="form-control"> 
                </div>
            
  
         </div>

        <h4>DATOS DE INSPECCION</h4>
        <div class="row">
            <div class="col-xl-4  mb-4">
                <p>INSPECCIONADO POR
                <input type="text"  id="inspeccionado"  name="inspeccionado" class="form-control"> 

                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>CARGO:
                <input type="text" id="cargo"  name="cargo" class="form-control">      
                </div>
                <div class="col-xl-4  mb-4">
                <p>FECHA
                <input type="date" id="fecha" name="fecha" class="form-control">

                </div>
              
         </div>
        
          <h4>PREOPERACIONAL DIARIA</h4>
          <h5>Elementos a Inspeccionar </h5>
          <div class="row">
            <div class="col-xl-4 mb-4">
            <p>ESTADO Y PRESION DE RUEDAS (VISUAL)
            <input type="text" id="estado_ruedas" name="estado_ruedas" class="form-control">      

            </div>
            <div class="col-xl-4 mb-4">
            <p>BATERIA
            <input type="text" id="bateria" name="bateria" class="form-control">      

            </div>
            <div class="col-xl-4 mb-4">
            <p>SISTEMA LUCES (Delanteras, traseras, freno y direccionales)
            <input type="text" id="luces" name="luces" class="form-control">      
        
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESPEJOS COMPLETOS
            <input type="text" id="espejos" name="espejos" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESTADO Y TENSIÓN DE LA CADENA
            <input type="text" id="estado_cadena" name="estado_cadena" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>FRENO DELANTERO 
            <input type="text" id="freno_delantero" name="freno_delantero" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>FRENO TRASERO
            <input type="text" id="freno_trasero" name="freno_trasero" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>BOCINA O PITO
            <input type="text" id="bocina"  name="bocina"   class="form-control">      
          
            </div>
         
          </div>
          <h4>LIMPIEZA Y DESINFECCION</h4>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>Se realizo limpieza del vehiculo
            <select id="limpieza"  name="limpieza" class="form-control">
                       <option value="">-----</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>                
                        </select>       
            </div>
            <div class="col-xl-4 mb-4">
            <p>Esta el vehiculo organizado en su interio
            <select id="vehiculo_organizado" name="vehiculo_organizado" class="form-control" >
                        <option value="">-----</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>                
                        </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>Se realizo desinfeccion de llaves, botones, palancas de cambios, palanca de frenos, manubrio y todas las superficies de contacto.
            <select id="desinfeccion" name="desinfeccion" class="form-control">
                        <option value="">-----</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>                
                        </select> 
            </div>

       
          </div>
          <h4>ESTADO DE SALUD DEL CONDUCTOR  </h4>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR RECIBIÓ CAPACITACION RESPECTO A LOS RIESGOS DEL TRANSITO, LOS CONOCE Y ACEPTA CONDUCIR DE MANERA DEFENSIVA
            <select id="capacitacion" name="capacitacion" class="form-control" >
                        <option value="">-----</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>                
                        </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR MANIFIESTA NO HABER CONSUMIDO ALCOHOL, SUSTANCIAS PSICOACTIVAS, BEBIDAS O ALIMENTOS QUE LE PONGAN EN RIESGO A EL O A TERCEROS
            <select id="consumo_bebidas" name="consumo_bebidas" class="form-control" >
                        <option value="">-----</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>                
                        </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR SE ENCUENTRA EN CONDICONES DE SALUD APTAS PARA CONDUCIR
            <select id="trabajador_salud" name="trabajador_salud" class="form-control" >
                        <option value="">-----</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>                
                        </select> 
            </div>
        
          
          </div>
          <h4>ELEMENTOS A INSPECCIONAR</h4>
             <div class="row">
             <div class="col-xl-4 mb-4">
            <p>LABRADO DE RUEDAS 3mm (VISUAL)
                         <select id="labrado_ruedas" name="labrado_ruedas" class="form-control" >
                               <option value="">-----</option>
                                <option value="B-Bueno">B-Bueno</option>
                                <option value="R-Regular">R-Regular</option>
                                <option value="M-Malo">M-Malo</option>
                                <option value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CAMBIO DE ACEITE
            <select id="cambio_aceite" name="cambio_aceite" class="form-control" >
                                 <option value="">-----</option>
                                <option value="B-Bueno">B-Bueno</option>
                                <option value="R-Regular">R-Regular</option>
                                <option value="M-Malo">M-Malo</option>
                                <option value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CAMBIO DE FILTRO
            <select id="cambio_filtro" name="cambio_filtro" class="form-control" >
                                <option value="">-----</option>
                                <option value="B-Bueno">B-Bueno</option>
                                <option value="R-Regular">R-Regular</option>
                                <option value="M-Malo">M-Malo</option>
                                <option value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>EMBRAGUE AJUSTADO Y SUAVE
            <select id="embrague" name="embrague" class="form-control" >
                                <option value="">-----</option>
                                <option value="B-Bueno">B-Bueno</option>
                                <option value="R-Regula">R-Regular</option>
                                <option value="M-Malo">M-Malo</option>
                                <option value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>KIT DE ARRASTE
            <select id="kit_arrastre" name="kit_arrastre" class="form-control" >
                                <option value="">-----</option>
                                <option value="B-Bueno">B-Bueno</option>
                                <option value="R-Regular">R-Regular</option>
                                <option value="M-Malo">M-Malo</option>
                                <option value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CONTROL DE FUGAS (Aceite y gasolina)
            <select id="control_fugas" name="control_fugas" class="form-control" >
                                <option value="">-----</option>
                                <option value="B-Bueno">B-Bueno</option>
                                <option value="R-Regular">R-Regular</option>
                                <option value="M-Malo">M-Malo</option>
                                <option value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESTADO DE AMORTIGUADORES
            <select id="amortiguadores" name="amortiguadores" class="form-control" >
                                <option value="">-----</option>
                                <option value="B-Bueno">B-Bueno</option>
                                <option value="R-Regular">R-Regular</option>
                                <option value="M-Malo">M-Malo</option>
                                <option value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>EXOSTO - SILENCIADOR
            <select id="exosto" name="exosto" class="form-control" >
                                <option value="">-----</option>
                                <option value="B-Bueno">B-Bueno</option>
                                <option value="R-Regular">R-Regular</option>
                                <option value="M-Malo">M-Malo</option>
                                <option value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
        
            <div class="col-xl-4 mb-4">
            <p>CASCO Y CHALECO DEL CONDUCTOR
            <select id="casco_chaleco_conductor" name="casco_chaleco_conductor" class="form-control" >
                                <option value="">-----</option>
                                <option value="B-Bueno">B-Bueno</option>
                                <option value="R-Regular">R-Regular</option>
                                <option value="M-Malo">M-Malo</option>
                                <option value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>

            <div class="col-xl-4 mb-4">
            <p>CAJA DE HERRAMIENTAS (Llave expansiva, destornilladores -pala y estrella, llaves fijas, alicate, llave bujía)
            <select id="caja_herramientas" name="caja_herramientas" class="form-control" >
                                <option value="">-----</option>
                                <option value="B-Bueno">B-Bueno</option>
                                <option value="R-Regular">R-Regular</option>
                                <option value="M-Malo">M-Malo</option>
                                <option value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
           
             
             
             </div>
             <h4>OBSERVACIONES</h4>
                        <div class="form-group">
                                <label for="exampleFormControlTextarea1">Registre sus observaciones</label>
                                <textarea name="observaciones" class="form-control" id="observaciones" rows="3"></textarea>
                        </div>
             <button type="button" class="btn btn-primary" onclick="registrar_inspeccion()"> Registrar Inspeccion</button>
             <br><br>
          </div>
         


</form>
</div>
@section('js')
<script>
function registrar_inspeccion(){
       var formulario= new FormData(document.getElementById('formulario'))
        
       console.log(formulario.get('placa'));
       /*
      var  url="/reportes/create_reporte_motocicletas";
        Swal.fire({
                title: '¿Estas seguro de editar la informacion?',
                icon: 'warning',
                showCancelButton: true,
                showCloseButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '<span>Acepto</span> ',
                cancelButtonText:'<span>Cancelar</span> '
                }).then((result) => {
                if (result.isConfirmed) {
                
                    Swal.fire(
                    'Edicion exitosa',
                    '<span style="color:white">Sus cambios han sido guardados</span>',
                    'success'
                    );

                }
                })
                */

}

</script>

@endsection
@endsection


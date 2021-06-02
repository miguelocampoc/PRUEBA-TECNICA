@extends('admin.layout')
@section('content')
<div id="app">
<br><br>
<div class="container">
<h3>  Editar inspeccion Motocicletas</h3>
<form  method="POST"   action="/reportes/update_reporte_motocicletas/{{ $id }}">
@csrf
@verbatim

<div class="row">
        <div class="col-xl-4  mb-4">
                <p>Placa</p>
                <input id="placa" :value="formato.pl" name="placa" type="text" class="form-control">
               
               
               
                </div>
                <div class="col-xl-4  mb-4">
                <p>Marca</p> 
                <input id="marca " :value="formato.mr" name="marca" type="text" class="form-control">
               
                
               
                </div>
                <div class="col-xl-4 mb-4">
                <p>Modelo:</p>
                <input id="modelo"  :value="formato.md" name="modelo" type="text" class="form-control">
                
                
                
                </div>
                <div class="col-xl-4 mb-4">
                <p>Conductor:</p>
                <input id="conductor" :value="formato.co"  name="conductor" type="text" class="form-control">
                
                
               
                </div>
                <div class="col-xl-4  mb-4">
                <p>Licencia de transito</p>
                        <select id="licencia_transito" name="licencia_transito" class="form-control" id="exampleFormControlSelect1">
                       
                        <option  v-if="formato.lc!=''" :value="formato.lc">{{formato.rv}}</option>
            
                        <option  v-if="formato.lc!='si'"  value="si">si</option>
                        <option  v-if="formato.lc!='no'"value="no">no</option>     
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Revision Tecnomecanica Vigente</p>
                        <select id="revision_tecnico" name="revision_tecnico" class="form-control" id="exampleFormControlSelect1">
                        <option  v-if="formato.rv!=''" :value="formato.rv">{{formato.rv}}</option>
                        <option  v-if="formato.rv!='si'"  value="si">si</option>
                        <option  v-if="formato.rv!='no'"value="no">no</option>       
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Fecha Vigente</p>
                     <input type="text" :value="formato.fv" id="fecha_vigente" name="fecha_vigente"  class="form-control">
                </div>
                <div class="col-xl-4  mb-4">
                <p>Soat vigente</p>
                <select id="soat_vigente" name="soat_vigente" class="form-control" id="exampleFormControlSelect1">
                        <option  v-if="formato.sv!=''" :value="formato.sv">{{formato.sv}}</option>
                        <option  v-if="formato.sv!='si'"  value="si">si</option>
                        <option  v-if="formato.sv!='no'"value="no">no</option>       
                        </select>
                </div>
                <div class="col-xl-4  mb-4">
                <p>KM INICIAL:</p>
                <input type="text" :value="formato.ki" id="km_inicial" name="km_inicial" class="form-control"> 
                </div>
                <div class="col-xl-4  mb-4">
                <p>KM FINAL:</p>                
                <input type="text" :value="formato.kf" id="km_final" name="km_final" class="form-control"> 
                </div>
                <div class="col-xl-4  mb-4">
                <p>TOTAL KM</p>
                <input type="text" :value="formato.kt" id="km_total" name="km_total"  class="form-control"> 
                </div>
            
  
         </div>

        <h4>DATOS DE INSPECCION</h4>
        <div class="row">
            <div class="col-xl-4  mb-4">
                <p>INSPECCIONADO POR
                <input type="text"  :value="formato.in" id="inspeccionado"  name="inspeccionado" class="form-control"> 

                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>CARGO:
                <input type="text"  :value="formato.ca" id="cargo"  name="cargo" class="form-control">      
                </div>
                <div class="col-xl-4  mb-4">
                <p>FECHA
                <input type="date"   :value="formato.fe" id="fecha" name="fecha" class="form-control">

                </div>
              
         </div>
        
          <h4>PREOPERACIONAL DIARIA</h4>
          <h5>Elementos a Inspeccionar </h5>
          <div class="row">
            <div class="col-xl-4 mb-4">
            <p>ESTADO Y PRESION DE RUEDAS (VISUAL)
            <input type="text" :value="formato.er" id="estado_ruedas" name="estado_ruedas" class="form-control">      

            </div>
            <div class="col-xl-4 mb-4">
            <p>BATERIA
            <input type="text" :value="formato.ba" id="bateria" name="bateria" class="form-control">      

            </div>
            <div class="col-xl-4 mb-4">
            <p>SISTEMA LUCES (Delanteras, traseras, freno y direccionales)
            <input type="text"  :value="formato.lu" id="luces" name="luces" class="form-control">      
        
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESPEJOS COMPLETOS
            <input type="text" :value="formato.es" id="espejos" name="espejos" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESTADO Y TENSIÓN DE LA CADENA
            <input type="text"  :value="formato.ec" id="estado_cadena" name="estado_cadena" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>FRENO DELANTERO 
            <input type="text" :value="formato.fd" id="freno_delantero" name="freno_delantero" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>FRENO TRASERO
            <input type="text"  :value="formato.ft"  id="freno_trasero" name="freno_trasero" class="form-control">      
          
            </div>
            <div class="col-xl-4 mb-4">
            <p>BOCINA O PITO
            <input type="text" :value="formato.bo" id="bocina"  name="bocina"   class="form-control">      
          
            </div>
         
          </div>
          <h4>LIMPIEZA Y DESINFECCION</h4>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>Se realizo limpieza del vehiculo
            <select id="limpieza"  name="limpieza" class="form-control">
                        <option  v-if="formato.li!=''" :value="formato.li">{{formato.li}}</option>
                        <option  v-if="formato.li!='si'"  value="si">si</option>
                        <option  v-if="formato.li!='no'"value="no">no</option>                     
                        </select>       
            </div>
            <div class="col-xl-4 mb-4">
            <p>Esta el vehiculo organizado en su interio
            <select id="vehiculo_organizado" name="vehiculo_organizado" class="form-control" >
                       <option  v-if="formato.vo!=''" :value="formato.vo">{{formato.vo}}</option>
                        <option  v-if="formato.vo!='si'"  value="si">si</option>
                        <option  v-if="formato.vo!='no'"value="no">no</option>                   
               </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>Se realizo desinfeccion de llaves, botones, palancas de cambios, palanca de frenos, manubrio y todas las superficies de contacto.
            <select id="desinfeccion" name="desinfeccion" class="form-control">
                        <option  v-if="formato.de!=''" :value="formato.de">{{formato.de}}</option>
                        <option  v-if="formato.de!='si'"  value="si">si</option>
                        <option  v-if="formato.de!='no'"value="no">no</option>                 
                        </select> 
            </div>

       
          </div>
          <h4>ESTADO DE SALUD DEL CONDUCTOR  </h4>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR RECIBIÓ CAPACITACION RESPECTO A LOS RIESGOS DEL TRANSITO, LOS CONOCE Y ACEPTA CONDUCIR DE MANERA DEFENSIVA
            <select id="capacitacion" name="capacitacion" class="form-control" >
                        <option  v-if="formato.de!=''" :value="formato.de">{{formato.de}}</option>
                        <option  v-if="formato.de!='si'"  value="si">si</option>
                        <option  v-if="formato.de!='no'" value="no">no</option>              
                        </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR MANIFIESTA NO HABER CONSUMIDO ALCOHOL, SUSTANCIAS PSICOACTIVAS, BEBIDAS O ALIMENTOS QUE LE PONGAN EN RIESGO A EL O A TERCEROS
            <select id="consumo_bebidas" name="consumo_bebidas" class="form-control" >
                        <option  v-if="formato.con!=''" :value="formato.con">{{formato.con}}</option>
                        <option  v-if="formato.con!='si'" value="si">SI</option>
                        <option  v-if="formato.con!='no'" value="no">NO</option>                
                        </select> 
            </div>
            <div class="col-xl-4 mb-4">
            <p>EL TRABAJADOR SE ENCUENTRA EN CONDICONES DE SALUD APTAS PARA CONDUCIR
            <select id="trabajador_salud" name="trabajador_salud" class="form-control" >
                        <option  v-if="formato.ts!=''" :value="formato.ts">{{formato.ts}}</option>
                        <option  v-if="formato.ts!='si'" value="si">SI</option>
                        <option  v-if="formato.ts!='no'" value="no">NO</option>                
              </select> 
            </div>
        
          
          </div>
          <h4>ELEMENTOS A INSPECCIONAR</h4>
             <div class="row">
             <div class="col-xl-4 mb-4">
            <p>LABRADO DE RUEDAS 3mm (VISUAL)
                         <select id="labrado_ruedas" name="labrado_ruedas" class="form-control" >
                               <option   v-if="formato.lr!=''" :value="formato.lr">{{formato.lr}}</option>
                                <option  v-if="formato.lr!='B-Bueno'" value="B-Bueno">B-Bueno</option>
                                <option  v-if="formato.lr!='R-Regular'" value="R-Regular">R-Regular</option>
                                <option  v-if="formato.lr!='M-Malo'"value="M-Malo">M-Malo</option>
                                <option  v-if="formato.lr!='NT-No Tiene'" value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CAMBIO DE ACEITE
            <select id="cambio_aceite" name="cambio_aceite" class="form-control" >
                                <option   v-if="formato.cac!=''" :value="formato.cac">{{formato.cac}}</option>
                                <option  v-if="formato.cac!='B-Bueno'" value="B-Bueno">B-Bueno</option>
                                <option  v-if="formato.cac!='R-Regular'" value="R-Regular">R-Regular</option>
                                <option  v-if="formato.cac!='M-Malo'"value="M-Malo">M-Malo</option>
                                <option  v-if="formato.cac!='NT-No Tiene'" value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CAMBIO DE FILTRO
            <select id="cambio_filtro" name="cambio_filtro" class="form-control" >
                                <option   v-if="formato.cf!=''" :value="formato.cf">{{formato.cf}}</option>
                                <option  v-if="formato.cf!='B-Bueno'" value="B-Bueno">B-Bueno</option>
                                <option  v-if="formato.cf!='R-Regular'" value="R-Regular">R-Regular</option>
                                <option  v-if="formato.cf!='M-Malo'"value="M-Malo">M-Malo</option>
                                <option  v-if="formato.cf!='NT-No Tiene'" value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>EMBRAGUE AJUSTADO Y SUAVE
            <select id="embrague" name="embrague" class="form-control" >
                                <option   v-if="formato.em!=''" :value="formato.em">{{formato.em}}</option>
                                <option  v-if="formato.em!='B-Bueno'" value="B-Bueno">B-Bueno</option>
                                <option  v-if="formato.em!='R-Regular'" value="R-Regular">R-Regular</option>
                                <option  v-if="formato.em!='M-Malo'"value="M-Malo">M-Malo</option>
                                <option  v-if="formato.em!='NT-No Tiene'" value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>KIT DE ARRASTE
            <select id="kit_arrastre" name="kit_arrastre" class="form-control" >
                                <option   v-if="formato.ka!=''" :value="formato.ka">{{formato.ka}}</option>
                                <option  v-if="formato.ka!='B-Bueno'" value="B-Bueno">B-Bueno</option>
                                <option  v-if="formato.ka!='R-Regular'" value="R-Regular">R-Regular</option>
                                <option  v-if="formato.ka!='M-Malo'"value="M-Malo">M-Malo</option>
                                <option  v-if="formato.ka!='NT-No Tiene'" value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>CONTROL DE FUGAS (Aceite y gasolina)
            <select id="control_fugas" name="control_fugas" class="form-control" >
                                <option   v-if="formato.cfu!=''" :value="formato.ka">{{formato.cfu}}</option>
                                <option  v-if="formato.cfu!='B-Bueno'" value="B-Bueno">B-Bueno</option>
                                <option  v-if="formato.cfu!='R-Regular'" value="R-Regular">R-Regular</option>
                                <option  v-if="formato.cfu!='M-Malo'"value="M-Malo">M-Malo</option>
                                <option  v-if="formato.cfu!='NT-No Tiene'" value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>ESTADO DE AMORTIGUADORES
            <select id="amortiguadores" name="amortiguadores" class="form-control" >
                               <option   v-if="formato.amr!=''" :value="formato.amr">{{formato.amr}}</option>
                                <option  v-if="formato.amr!='B-Bueno'" value="B-Bueno">B-Bueno</option>
                                <option  v-if="formato.amr!='R-Regular'" value="R-Regular">R-Regular</option>
                                <option  v-if="formato.amr!='M-Malo'"value="M-Malo">M-Malo</option>
                                <option  v-if="formato.amr!='NT-No Tiene'" value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>EXOSTO - SILENCIADOR
            <select id="exosto" name="exosto" class="form-control" >
                                <option   v-if="formato.exo!=''" :value="formato.exo">{{formato.exo}}</option>
                                <option  v-if="formato.exo!='B-Bueno'" value="B-Bueno">B-Bueno</option>
                                <option  v-if="formato.exo!='R-Regular'" value="R-Regular">R-Regular</option>
                                <option  v-if="formato.exo!='M-Malo'"value="M-Malo">M-Malo</option>
                                <option  v-if="formato.exo!='NT-No Tiene'" value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
        
            <div class="col-xl-4 mb-4">
            <p>CASCO Y CHALECO DEL CONDUCTOR
            <select id="casco_chaleco_conductor" name="casco_chaleco_conductor" class="form-control" >
                                <option   v-if="formato.ccc!=''" :value="formato.ccc">{{formato.ccc}}</option>
                                <option  v-if="formato.ccc!='B-Bueno'" value="B-Bueno">B-Bueno</option>
                                <option  v-if="formato.ccc!='R-Regular'" value="R-Regular">R-Regular</option>
                                <option  v-if="formato.ccc!='M-Malo'"value="M-Malo">M-Malo</option>
                                <option  v-if="formato.ccc!='NT-No Tiene'" value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>

            <div class="col-xl-4 mb-4">
            <p>CAJA DE HERRAMIENTAS (Llave expansiva, destornilladores -pala y estrella, llaves fijas, alicate, llave bujía)
            <select id="caja_herramientas" name="caja_herramientas" class="form-control" >
                                <option   v-if="formato.caj!=''" :value="formato.caj">{{formato.caj}}</option>
                                <option  v-if="formato.caj!='B-Bueno'" value="B-Bueno">B-Bueno</option>
                                <option  v-if="formato.caj!='R-Regular'" value="R-Regular">R-Regular</option>
                                <option  v-if="formato.caj!='M-Malo'"value="M-Malo">M-Malo</option>
                                <option  v-if="formato.caj!='NT-No Tiene'" value="NT-No Tiene">NT-No Tiene</option>
                        
                        </select>
            </div>
           
             
             
             </div>
             <h4>OBSERVACIONES</h4>
                        <div class="form-group">
                                <label for="exampleFormControlTextarea1">Registre sus observaciones</label>
                                <textarea :value="formato.obs" name="observaciones" class="form-control" id="observaciones" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" > Registrar </button>
             <br><br>
          </div>
         

          @endverbatim

</form>
</div>   

</div>
@section('js')
<script>
var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!',
    formato:Array,
  },
  methods:{
    
   
  },
  created:function(){
      var id= <?php echo $id?>;
    axios.get('/reportes/get_reporte_id/'+id).then(response =>{
      this.formato=response.data;
     });
  },
   
})
 

</script>

@endsection
@endsection

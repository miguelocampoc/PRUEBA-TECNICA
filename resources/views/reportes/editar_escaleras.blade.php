@extends('admin.layout')
@section('content')

<br>
<div  id="app" class="container">
 <form  method="POST"   action="/reportes/create_reporte_escaleras">
 @csrf
 @verbatim

<h3 >Crear inspeccion escaleras</h3>
<h4>Inspeccion Pre-uso escalera</h4>
    <div class="row">
            <div class="col-xl-4  mb-4">
                    <p>TRABAJO</p>
                    <input :value="formato.tb" id="trabajo"  name="trabajo" type="text" class="form-control">
            </div>
      
            <div class="col-xl-4  mb-4">
                    <p>TIPO ESCALERA</p>
                    <input  :value="formato.ti"  id="tipo_escalera" name="tipo_escalera" type="text" class="form-control">
            </div>
            <div class="col-xl-4  mb-4">
                    <p>FECHA</p>
                    <input id="fecha" :value="formato.fe" name="fecha" type="date" class="form-control">
            </div>
    </div>
    <div class="row">
            <div class="col-xl-4  mb-4">
                    <p>Largueros(en buen estado)</p>
                    <select id="largueros" name="largueros" class="form-control" id="exampleFormControlSelect1">
                        <option v-if="formato.la!=''" :value="formato.la">{{formato.la}}</option>
                        <option v-if="formato.la!='correcto'" value="correcto">Correcto</option>
                        <option v-if="formato.la!='incorrecto'" value="incorrecto">Incorrecto</option>     
                        <option v-if="formato.la!='no aplica'"value="no aplica">No aplica</option>     

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Peldaños(antideslizantes, no torcidos y en buen estado)</p>
                    <select id="peldaños" name="peldaños" class="form-control" id="exampleFormControlSelect1">
                         <option v-if="formato.pe!=''" :value="formato.pe">{{formato.pe}}</option>
                         <option v-if="formato.pe!='correcto'" value="correcto">Correcto</option>
                         <option v-if="formato.pe!='incorrecto'" value="incorrecto">Incorrecto</option>     
                         <option v-if="formato.pe!='no aplica'"value="no aplica">No aplica</option>          

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Union de peldaños y largueros</p>
                    <select id="union_peldaños" name="union_peldaños" class="form-control" id="exampleFormControlSelect1">
                         <option v-if="formato.up!=''" :value="formato.pe">{{formato.up}}</option>
                         <option v-if="formato.up!='correcto'" value="correcto">Correcto</option>
                         <option v-if="formato.up!='incorrecto'" value="incorrecto">Incorrecto</option>     
                         <option v-if="formato.up!='no aplica'"value="no aplica">No aplica</option>          

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Zapatas antideslizantes</p>
                    <select id="zapatas" name="zapatas" class="form-control" id="exampleFormControlSelect1">
                         <option v-if="formato.za!=''" :value="formato.pe">{{formato.za}}</option>
                         <option v-if="formato.za!='correcto'" value="correcto">Correcto</option>
                         <option v-if="formato.za!='incorrecto'" value="incorrecto">Incorrecto</option>     
                         <option v-if="formato.za!='no aplica'"value="no aplica">No aplica</option>        
        
                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Piezas de ajuste (tornillos,pernos,otros)</p>
                    <select id="Piezas_ajuste" name="piezas_ajuste" class="form-control" id="exampleFormControlSelect1">
                         <option v-if="formato.pa!=''" :value="formato.pa">{{formato.pa}}</option>
                         <option v-if="formato.pa!='correcto'" value="correcto">Correcto</option>
                         <option v-if="formato.pa!='incorrecto'" value="incorrecto">Incorrecto</option>     
                         <option v-if="formato.pa!='no aplica'"value="no aplica">No aplica</option>   

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Aseo de escalera (libre de sustancias deslizantes)</p>
                    <select id="aseo_escalera" name="aseo_escalera" class="form-control" id="exampleFormControlSelect1">
                          <option v-if="formato.ae!=''" :value="formato.ae">{{formato.ae}}</option>
                         <option v-if="formato.ae!='correcto'" value="correcto">Correcto</option>
                         <option v-if="formato.ae!='incorrecto'" value="incorrecto">Incorrecto</option>     
                         <option v-if="formato.ae!='no aplica'"value="no aplica">No aplica</option>   


                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Identificacion legible en la escalera</p>
                    <select id="identificacion" name="identificacion" class="form-control" id="exampleFormControlSelect1">
                            <option v-if="formato.id!=''" :value="formato.id">{{formato.id}}</option>
                            <option v-if="formato.id!='correcto'" value="correcto">Correcto</option>
                            <option v-if="formato.id!='incorrecto'" value="incorrecto">Incorrecto</option>     
                            <option v-if="formato.id!='no aplica'"value="no aplica">No aplica</option>
                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Cuenta con señalizacion de seguridad en peldaño</p>
                    <select id="señalizacion" name="señalizacion" class="form-control" id="exampleFormControlSelect1">
                           <option v-if="formato.se!=''" :value="formato.se">{{formato.se}}</option>
                            <option v-if="formato.se!='correcto'" value="correcto">Correcto</option>
                            <option v-if="formato.se!='incorrecto'" value="incorrecto">Incorrecto</option>     
                            <option v-if="formato.se!='no aplica'"value="no aplica">No aplica</option>    

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>Brazos de union anti-apertura (aplica para escaleras tipo tijera)</p>
                    <select id="brazos_antiapertura" name="brazos_antiapertura" class="form-control" id="exampleFormControlSelect1">
                            <option v-if="formato.ba!=''" :value="formato.ba">{{formato.ba}}</option>
                            <option v-if="formato.ba!='correcto'" value="correcto">Correcto</option>
                            <option v-if="formato.ba!='incorrecto'" value="incorrecto">Incorrecto</option>     
                            <option v-if="formato.ba!='no aplica'"value="no aplica">No aplica</option>        

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>ganchos trabapeldaños (aplica en tijeras extensibles)</p>
                    <select id="ganchos_trabapeldaños" name="ganchos_trabapeldaños" class="form-control" id="exampleFormControlSelect1">
                            <option v-if="formato.ga!=''" :value="formato.ga">{{formato.ga}}</option>
                            <option v-if="formato.ga!='correcto'" value="correcto">Correcto</option>
                            <option v-if="formato.ga!='incorrecto'" value="incorrecto">Incorrecto</option>     
                            <option v-if="formato.ga!='no aplica'"value="no aplica">No aplica</option>      

                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                <p>Guias externas para union de largueros (aplica tijeras extensibles)</p>
                <select id="guias_externas_union" name="guias_externas_union" class="form-control" id="exampleFormControlSelect1">
                            <option v-if="formato.geu!=''" :value="formato.geu">{{formato.geu}}</option>
                            <option v-if="formato.geu!='correcto'" value="correcto">Correcto</option>
                            <option v-if="formato.geu!='incorrecto'" value="incorrecto">Incorrecto</option>     
                            <option v-if="formato.geu!='no aplica'" value="no aplica">No aplica</option>      
 

                    </select>
        </div>
            <div class="col-xl-4  mb-4">
                    <p>OBSERVACIONES</p>
                                <textarea class="form-control " :value="formato.obs" id="exampleFormControlTextarea1" name="observaciones" rows="3"></textarea>
            </div>
            <div class="col-xl-4  mb-4">
                    <p>CONCLUSION-ESCALERA APTA PARA SER USADA</p>
                    <select  id="conclusion" name="conclusion" class="form-control" id="exampleFormControlSelect1">
                                <option  v-if="formato.con!=''":value="formato.con">{{formato.con}}</option>
                                <option v-if="formato.con!='si'" value="si">SI</option>
                                <option   v-if="formato.con!='no'"value="no">NO</option>     
                    </select>                        
            </div>
            <div class="col-xl-4  mb-4">
                    <p>JUSTIFICACIÓN:</p>
                    <textarea  :value="formato.jus" class="form-control " id="exampleFormControlTextarea1" rows="3" name="justificacion"></textarea>
           
            </div>
            </div>
      
  
        
                        <button class="btn btn-primary" onclick="RegisterUser()"> Registrar Inspeccion</button>
                        <br>
                        <br>
@endverbatim
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




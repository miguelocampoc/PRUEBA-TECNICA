@extends('admin.layout')
@section('content')
<br><br>
<div class="container">
<h3>Crear inspeccion Arnes y Aparejos</h3>
<form  method="POST"   action="/Reporte/create_reporte_arnes">
@csrf
<div class="row">
        <div class="col-xl-4  mb-4">
                <p>N° de serie arnes:</p>
                <input id="n_serie_arnes" name="n_serie_arnes" type="text" class="form-control">
                </div>
                <div class="col-xl-4  mb-4">
                <p>N° de serie eslinga:</p> 
                <input id="n_serie_eslinga" name="n_serie_eslinga" type="text" class="form-control">
                </div>
                <div class="col-xl-4 mb-4">
                <p>N° eslinga:</p>
                <input id="n_eslinga" name="n_eslinga"  class="form-control">
                </div>
         </div>

        <h4>ARNES DE SEGURIDAD</h4>
        <div class="row">
            <div class="col-xl-4  mb-4">
                <p>Argolla en D pectoral -1 (Elem. para ascenso y descenso controlado)
                        <select id="argolla_d_pectora" name="argolla_d_pectora" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
              
                <div class="col-xl-4  mb-4">
                <p>Argolla en D dorsal -1 (Elem. para detección de caídas)
                        <select id="argolla_d_dorsal" name="argolla_d_dorsal" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Argollas en D laterales en cintura-2 (Elem. para Posicionamiento)
                        <select id="argolla_d_lateral" name="argolla_d_lateral" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Soporte dorsal central - 1 
                        <select id="soporte_dorsal_central" name="soporte_dorsal_central" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Eslabones de ajuste rapido pectoral-2 
                        <select id="eslabones_ajuste_pectoral" name="eslabones_ajuste_pectoral" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Eslabones de ajuste rapido pelvico-2
                        <select id="eslabones_ajuste_pelvico" name="eslabones_ajuste_pelvico" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Hebillas de tensión en los muslos-2 
                        <select id="eslabones_ajuste_muslos" name="eslabones_ajuste_muslos" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Silla trasera - 1 
                        <select id="silla_trasera" name="silla_trasera" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Costuras en general 
                        <select id="costuras_general" name="costuras_general" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <h5>Criterio de aceptacion</h5>
                        <select id="criterio_aceptacion" name="criterio_aceptacion" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Aceptado</option>
                        <option value="tecnico">No aceptado</option>                
                        </select>
                        
                </div>
         </div>
          
          <h4>ESLINGA DOBLE GANCHOS </h4>
          <div class="row">
            <div class="col-xl-4 mb-4">
            <p>Cuerpo de eslinga
                        <select id="rolcuerpo_eslinga" name="rolcuerpo_eslinga" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Ganchos doble seguros 
                        <select id="ganchos_dobles" name="ganchos_dobles" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Absorbente de choque
                        <select id="absorbente_choque" name="absorbente_choque" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Costuras en general 
                        <select id="costuras_general2" name="costuras_general2" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                <h5>Criterio de aceptacion</h5>
                        <select id="criterio_aceptacion2" name="criterio_aceptacion2" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Aceptado</option>
                        <option value="tecnico">No aceptado</option>                
                        </select>
                        
                </div>
          </div>
          <h4>ESLINGA DE POSICIONAMIENTO</h5>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>Cuerpo de eslinga  
                        <select id="cuerpo_eslinga2" name="cuerpo_eslinga2" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Ganchos doble seguros 
                        <select id="ganchos_dobles2" name="ganchos_dobles2" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Costuras en general 
                        <select id="costuras_general2" name="costuras_general2" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>

          <div class="col-xl-4  mb-4">
                <h5>Criterio de aceptacion</h5>
                        <select id="criterio_aceptacion3" name="criterio_aceptacion3" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Aceptado</option>
                        <option value="tecnico">No aceptado</option>                
                        </select>
                        
                </div>
          </div>
          <h4>ADAPTADOR DE ANCLAJE </h4>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>Cuerpo del adptador 
                        <select id="cuerpo_adaptador" name="cuerpo_adaptador" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Argollas 
                        <select id="argollas" name="argollas" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Costuras en general 
                        <select id="costuras_general3" name="costuras_general3" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
          <div class="col-xl-4  mb-4">
                <h5>Criterio de aceptacion</h5>
                        <select id="criterio_aceptacion4" name="criterio_aceptacion4" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Aceptado</option>
                        <option value="tecnico">No aceptado</option>                
                        </select>
                        
                </div>
          
          </div>
          <h4>LINEA DE VIDA </h4>
             <div class="row">
             <div class="col-xl-4 mb-4">
            <p>Argolla superior 
                        <select id="argolla_superior" name="argolla_superior" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Tambor 
                        <select id="tambor" name="tambor" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Gancho inferior 
                        <select id="gancho_inferior" name="gancho_inferior" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Costuras en general 
                        <select id="costuras_general4" name="costuras_general4" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>

             <div class="col-xl-4  mb-4">
                <h5>Criterio de aceptacion</h5>
                        <select id="criterio_aceptacion5" name="criterio_aceptacion5" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Aceptado</option>
                        <option value="tecnico">No aceptado</option>                
                        </select>
                        
                </div>
             
             
             </div>
             <button class="btn btn-primary" onclick="RegisterUser()"> Registrar </button>
            <br><br>
          </div>
         


</form>
</div>
@endsection


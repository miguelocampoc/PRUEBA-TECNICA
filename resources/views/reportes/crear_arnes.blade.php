@extends('admin.layout')
@section('content')
<br><br>
<div class="container">
<h3>Crear inspeccion Arnes y Aparejos</h3>
<form  enctype="multipart/form-data" action="/usuarios/store" method="POST">
@csrf
<div class="row">
        <div class="col-xl-4  mb-4">
                <p>N° de serie arnes:</p>
                <input id="nombre" name="nombre" type="text" class="form-control">
                @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4  mb-4">
                <p>N° de serie eslinga:</p> 
                <input id="apellido" name="apellido" type="text" class="form-control">
                @error('apellido')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-4 mb-4">
                <p>N° eslinga:</p>
                <input id="email" name="email" type="email" class="form-control">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
         </div>

        <h4>ARNES DE SEGURIDAD</h4>
        <div class="row">
            <div class="col-xl-4  mb-4">
                <p>Argolla en D pectoral -1 (Elem. para ascenso y descenso controlado)
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
              
                <div class="col-xl-4  mb-4">
                <p>Argolla en D dorsal -1 (Elem. para detección de caídas)
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Argollas en D laterales en cintura-2 (Elem. para Posicionamiento)
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Soporte dorsal central - 1 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Eslabones de ajuste rapido pectoral-2 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Eslabones de ajuste rapido pelvico-2
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Hebillas de tensión en los muslos-2 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Silla trasera - 1 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <p>Costuras en general 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
                        
                </div>
                <div class="col-xl-4  mb-4">
                <h5>Criterio de aceptacion</h5>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Aceptado</option>
                        <option value="tecnico">No aceptado</option>                
                        </select>
                        
                </div>
         </div>
          
          <h4>ESLINGA DOBLE GANCHOS </h4>
          <div class="row">
            <div class="col-xl-4 mb-4">
            <p>Cuerpo de eslinga
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Ganchos doble seguros 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Absorbente de choque
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Costuras en general 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4  mb-4">
                <h5>Criterio de aceptacion</h5>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Aceptado</option>
                        <option value="tecnico">No aceptado</option>                
                        </select>
                        
                </div>
          </div>
          <h4>ESLINGA DE POSICIONAMIENTO</h5>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>Cuerpo de eslinga  
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Ganchos doble seguros 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Costuras en general 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>

          <div class="col-xl-4  mb-4">
                <h5>Criterio de aceptacion</h5>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Aceptado</option>
                        <option value="tecnico">No aceptado</option>                
                        </select>
                        
                </div>
          </div>
          <h4>ADAPTADOR DE ANCLAJE </h4>
          <div class="row">
          <div class="col-xl-4 mb-4">
            <p>Cuerpo del adptador 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Argollas 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Costuras en general 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
          <div class="col-xl-4  mb-4">
                <h5>Criterio de aceptacion</h5>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">Aceptado</option>
                        <option value="tecnico">No aceptado</option>                
                        </select>
                        
                </div>
          
          </div>
          <h4>LINEA DE VIDA </h4>
             <div class="row">
             <div class="col-xl-4 mb-4">
            <p>Argolla superior 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Tambor 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Gancho inferior 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>
            <div class="col-xl-4 mb-4">
            <p>Costuras en general 
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                        <option value="administrador">B-Bueno</option>
                        <option value="tecnico">M-Malo</option>
                        <option value="hse">Na-No aplica</option>
                
                        </select>
            </div>

             <div class="col-xl-4  mb-4">
                <h5>Criterio de aceptacion</h5>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
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


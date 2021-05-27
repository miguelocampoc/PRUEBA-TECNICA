@extends('admin.layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">

<br>
<div class="container">
    <h4>Crear permiso de trabajo</h4>
    <div class="row">
              <div class="col-xl-4  mb-4">
                  <p>Empresa</p>
                   <input type="text" class="form-control">
                        
                  </div>
                  <div class="col-xl-4  mb-4">
                  <p>Ciudad</p>
                  <input type="text" class="form-control">

                        
                  </div>
                  <div class="col-xl-4  mb-4">
                  <p>Area/proceso</p>
                  <input type="text" class="form-control">

                        
                  </div>
                  <div class="col-xl-4  mb-4">
                  <p>Fecha de realizacion del trabajo</p>
                  <input type="date" class="form-control">

                        
                  </div>
                  <div class="col-xl-4  mb-4">
                  <p>Lugar de trabajo</p>
                  <input type="text" class="form-control">

                        
                  </div>
                  <div class="col-xl-4  mb-4">
                  <p>Hora de incio (a.m/p.m)</p>
                  <input type="text" class="form-control">

                        
                  </div>
                  <div class="col-xl-4  mb-4">
                  <h5>Ubicacion donde se realiza el trabajo</h5>
                  <input type="text" class="form-control">

                        
                  </div>
                  <div class="col-xl-4  mb-4">
                  <p>Altura aproximada a la cual se va a realizar la actividad </p>
                  <input type="text" class="form-control">

                        
                  </div>
      </div>
      <h5>ANALISIS DE LA TAREA</h5>
      <div class="row">
                    <div class="col-xl-4  mb-4">
                                <p>Se cuenta con procedimiento especifico y claro para realizar la labor</p>
                                <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>   

                                        
                    </div>
                    <div class="col-xl-4  mb-4">
                                <p>Se dispone los elementos necesarios para trabajar en alturas</p>
                                <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>   
                                        
                    </div>
                    <div class="col-xl-4  mb-4">
                                <p>El personal esta capacitado para realizar trabajos en altura</p>
                                <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>   
                                        
                    </div>
                    <div class="col-xl-4  mb-4">
                                <p>Se verifico que los sistemas de acceso cumplan con la distancia minima de separacion de 1.2 metros de circuitos electricos energizados</p>
                                <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>   
                                        
                    </div>
      </div>
      <h5>AREA DE TRABAJO</h5>
           <div class="row">
                <div class="col-xl-4  mb-4">
                        <p>El area de ejecucion de la labor se encuentra limpia,ordenada y es optima para la ejecucion de la tarea</p>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>   
                                        
                </div>
                <div class="col-xl-4  mb-4">
                        <p>Se analizo y delimito el area de trabajo,teniendo en cuenta la zona de caida</p>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>   
                                        
                </div>
           
           </div>
        <h5>EPP y VERIFICACION DE SISTEMA DE PROTECCION CONTRA CAIDAS </h5>
        <div class="row">
                <div class="col-xl-4  mb-4">
                        <p>Casco con barbuquejo de 3 puntos de apoyo </p>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>   
                                        
                </div>
                <div class="col-xl-4  mb-4">
                        <p>Guantes</p>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>    
                                        
                </div>
                <div class="col-xl-4  mb-4">
                        <p>Botas de seguridad</p>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>    
                                        
                </div>
                <div class="col-xl-4  mb-4">
                        <p>Gafas de seguridad</p>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>      
                                        
                </div>
                <div class="col-xl-4  mb-4">
                        <p>Proteccion auditiva</p>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>      
                                        
                </div>
                <div class="col-xl-4  mb-4">
                        <p>Estan los trabajadores entrenados en el uso de los EPP y el sistema de proteccion contra caidas</p>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>      
                                        
                </div>
                <div class="col-xl-4  mb-4">
                        <p>Estan todos los elementos de proteccion contra caidas en buen estado</p>
                        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>      
                                        
                </div>
           </div>
           <h5>Verificacion de Puntos de Anclaje y Conectores</h5>
            <div class="row">
                    <div class="col-xl-4  mb-4">
                                <p>Si el trabajo requiere uso de una linea de vida o dispostivo fijo, esta debidamente certificada</p>
                                <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>            
                                                
                        </div>
                        <div class="col-xl-4  mb-4">
                                <p>Existen puntos de anclaje seguros(Certifcados,estructurales,autorizados)</p>
                                <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>           
                                                
                        </div>
                        <div class="col-xl-4  mb-4">
                                <p>Se tienen adaptadores de anclaje certificados y en buen estado</p>
                                <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
                                   <option value="tecnico">N/A</option>     
   
                                </select>              
                                                
                        </div>
                    
            </div>
            <h5>Calculo de distancia de caida libre</h5>
              <div class="row">
                        <div class="col-xl-4  mb-4">
                                <p>Altura del trabajador</p>
                                <input type="text" class="form-control" name="" id="">            
                                                
                        </div>
                        <div class="col-xl-4  mb-4">
                                <p>Longitud de la eslinga</p>
                                <input type="text" class="form-control" name="" id="">            
            
                                                
                        </div>
                        <div class="col-xl-4  mb-4">
                                <p>Absorvedor de choque </p>
                                <input type="text" class="form-control" name="" id="">            

                                                
                        </div>
                        <div class="col-xl-4  mb-4">
                                <p>Factor de seguridad</p>
                                <input type="text" class="form-control" name="" id="">            

                                                
                        </div>
                        <div class="col-xl-4  mb-4">
                                <p>Distancia de caida</p>
                                <input type="text" class="form-control" name="" id="">            
 
                                                
                        </div>
                     
                        <div class="col-xl-4  mb-4">
                                <p>Distancia de caida libre</p>
                                <input type="text" class="form-control" name="" id="">            
    
                                                
                        </div>
                        <div class="col-xl-4  mb-4">
                                <p>¿La distancia de anclaje-obstaculo es mayor o igual a la distancia libre de la caida?</p>
                                <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1">
                                   <option value="administrador">SI</option>
                                   <option value="tecnico">NO</option>  
   
                                </select> 
                                                
                        </div>
              </div>
              <h5>Trabajador que realiza la labor</h5>
               <div class="row">
                        <div class="col-xl-4  mb-4">
                                <p>Trabajador(1)</p>
                                <input type="text" class="form-control" name="" id="">            

                                                
                        </div>
                        <div class="col-xl-4  mb-4">
                                <p>Trabajador(2)</p>
                                <input type="text" class="form-control" name="" id="">            
 
                                                
                        </div>
                        
               
               </div>
               <h5>Evidencia</h5>
                <div class="row  ">
                        <div class="col-xl-4  mb-4">
                        <form action="/reportes/create"
                        class="dropzone"
                        id="my-awesome-dropzone">
                        </form>
                        </div>
                </div>
                  <button class="btn btn-primary"> Enviar permiso de trabajo</button>
                  <br><br>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
<script>
Dropzone.options.myAwesomeDropzone = {
  headers:{
   "X-CSRF-TOKEN":"{{csrf_token()}}"
  },
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
};
</script>
@endsection

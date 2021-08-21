@extends('admin.layout')
@section('css')

@endsection
@section('content')
<style>
h1,h2,h3,h4{
    color:white;
    font-family:Arial;
}
span,a{
    font-family:Arial;
    color:white;
    }
a:hover{
 color:white;
}

</style>
<div  style="
        background: url(/adminlte/img/logsitca.jpg) no-repeat fixed center; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
         background-size: cover;
         width: 100%;
         height:100%;
         min-height:100vh; ">
<div class="container pl-3"> 
 <br>
   <div class="row">
    <!--<h1 style="color:white">Bienvenido  {{ Auth::user()->name }}</h1>!-->
    </div>
    <br>
    <div class="row">

        <div class="col-xl-4">
            <div class="card  bg-dark " style="opacity:0.9; color:white;">
          

                    <div class="card-header border ">
                    <i class="fas fa-users mr-3"></i>  <span>Administrar Usuarios</span>
                    </div>
                    <div class="card-body border">
                    <a href="usuarios/crear"> <i class="fas fa-user-plus  mr-3"></i> Crear usuario</a><br><br>
                    <a href="usuarios/listar"><i class="far fa-eye  mr-3 "></i>Ver usuarios </a>
                    </div>
            </div>
         </div>
                      

                <div class="col-xl-4">
                <div class="card  bg-dark " style="opacity:0.9; color:white;">


                        <div class="card-header border ">
                        <i class="fas fa-plus  mr-3"></i>  <span>Crear</span>
                        </div>
                        <div class="card-body border">
                        <a href="/crear/vehiculo"> <i class="far fa-circle  mr-3"></i> Vehiculo</a><br><br>
                        <a href="/crear/persona" ><i class="far fa-circle mr-3 "></i>propietarios o conductores  </a>

                        </div>
                        
                </div>
                </div>
                <div class="col-xl-4">
                        <div class="card  bg-dark " style="opacity:0.9; color:white;">


                                <div class="card-header border ">
                                <i class="far fa-eye mr-3"></i>  <span>Ver</span>
                                </div>
                                <div class="card-body border">
                                <a href="/ver/vehiculos"> <i class="far fa-circle  mr-3"></i> Vehiculos</a><br><br>
                                <a href="/ver/personas"><i class="far fa-circle  mr-3 "></i>Propietarios o conductores  </a>

                                </div>
                                
                        </div>
                </div>
        
                <div class="col-xl-4">
                        <div class="card  bg-dark " style="opacity:0.9; color:white;">


                                <div class="card-header border ">
                                <i class="far fa-eye mr-3"></i>  <span>Consulta</span>
                                </div>
                                <div class="card-body border">
                                <a  href="/consulta/placa"><i class="far fa-circle  mr-3 "></i>Placa </a>
                       

                                </div>
                                
                        </div>
                </div>

              

    </div>
    
</div>
</div>
@endsection

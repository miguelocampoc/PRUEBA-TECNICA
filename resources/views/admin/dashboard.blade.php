@extends('admin.layout')
@section('content')
<style>
h1,h2,h3,h4{
    color:white;
    font-family:Arial;
}
span{
    font-family:Arial;

}

</style>
<div  style="
        background: url(/adminlte/img/fondocolomtel.png) no-repeat fixed center; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
         background-size: cover;
         width: 100%;
         height:100%;
         height:100vh; ">
<div  class="container"> 
 <br>
   <div class="row">
    <!--<h1 style="color:white">Bienvenido  {{ Auth::user()->name }}</h1>!-->
    <img src="{{ asset('adminlte/img/LogoColomtel1.PNG') }}" width="300px"></img>
    </div>
    <br>
    <div class="row">
    @if( Auth::user()->rol=='administrador' )

        <div class="col-xl-4">
            <div class="card  bg-dark " style="opacity:0.7; color:white;">
          

                    <div class="card-header border ">
                    <i class="fas fa-users mr-3"></i>  <span>Administrar Usuarios</span>
                    </div>
                    <div class="card-body border">
                    <span> <i class="fas fa-user-plus  mr-3"></i> Crear usuario</span><br><br>
                    <span ><i class="far fa-eye  mr-3 "></i>Ver usuarios </span>
                    </div>
            </div>
         </div>
         @endif

         <div class="col-xl-4">
            <div class="card  bg-dark " style="opacity:0.7; color:white;">
                    <div class="card-header border ">
                    <i class="fas fa-th mr-3"></i>  <span>Permisos de trabajo</span>
                    </div>
                    <div class="card-body border">
                    <span> <i class="far fa-circle mr-3"></i> Crear permisos de trabajo</span><br><br>
                    @if( Auth::user()->rol=='administrador' || Auth::user()->rol=='hse' )

                    <span ><i class="far fa-circle mr-3 "></i>Ver permisos de trabajo </span> <!--<br><br>!-->
                    @endif
                 <!--   <span ><i class="far fa-circle mr-3 "></i>Ver mis permisos de trabajo </span>!-->
                    </div>
            </div>
         </div>
  <!--
         <div class="col-xl-4">
            <div class="card  bg-dark " style="opacity:0.7; color:white;">
                    <div class="card-header border ">
                    <i class=" fas fa-list mr-3"></i>  <span>Crear reportes de inspeccion</span>
                    </div>
                    <div class="card-body border">
                    <span> <i class="far fa-circle  mr-3"></i> Arnes y Aparejos</span><br><br>
                    <span ><i class="far fa-circle mr-3 "></i>Motocicletas </span><br><br>
                    <span ><i class="far fa-circle mr-3 "></i>Escaleras </span>

                    </div>
            </div>
         </div>

         <div class="col-xl-4">
            <div class="card  bg-dark " style="opacity:0.7; color:white;">
                    <div class="card-header border ">
                    <i class="far fa-eye mr-3"></i>  <span>Ver reportes de inspeccion</span>
                    </div>
                    <div class="card-body border">
                    <span> <i class="far fa-circle  mr-3"></i> Arnes y Aparejos</span><br><br>
                    <span ><i class="far fa-circle  mr-3 "></i>Motocicletas </span><br><br>
                    <span ><i class="far fa-circle  mr-3 "></i>Escaleras </span>

                    </div>
            </div>
         </div>
         @if( Auth::user()->rol=='administrador' || Auth::user()->rol=='hse' )

         <div class="col-xl-4">
            <div class="card  bg-dark " style="opacity:0.7; color:white;">
                    <div class="card-header border ">
                    <i class="fas fa-plus mr-3"></i>  <span>Crear </span>
                    </div>
                    <div class="card-body border">
                    <span> <i class="far fa-circle  mr-3"></i> Motocicletas</span><br><br>
                    <span ><i class="far fa-circle  mr-3 "></i>Escaleras </span><br><br>
                    <span ><i class="far fa-circle  mr-3 "></i>Arnes y Aparejos </span>

                    </div>
            </div>
         </div>
         @endif
         @if( Auth::user()->rol=='administrador' || Auth::user()->rol=='hse' )

         <div class="col-xl-4">
            <div class="card  bg-dark " style="opacity:0.7; color:white;">
                    <div class="card-header border ">
                    <i class="far fa-eye mr-3"></i>  <span>Ver </span>
                    </div>
                    <div class="card-body border">
                    <span> <i class="far fa-circle  mr-3"></i> Motocicletas</span><br><br>
                    <span ><i class="far fa-circle  mr-3 "></i>Escaleras </span><br><br>
                    <span ><i class="far fa-circle  mr-3 "></i>Arnes y Aparejos </span>

                    </div>
            </div>
         </div>
         @endif

    </div>
    !-->
</div>
</div>
@endsection

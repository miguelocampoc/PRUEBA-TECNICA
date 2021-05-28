<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REGIN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->

  <link rel="stylesheet" href="{{asset('/adminlte/css/adminlte.min.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav style="background-color:#ec048c;" class="main-header navbar navbar-expand navbar-white navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" style="color:white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!--
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      !-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
          <!--
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        !-->
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                 <!-- <i class="fas fa-search"></i>!-->
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <!--  <i class="fas fa-times"></i>!-->
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
          <!--
        <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="far fa-comments"></i>
         <span class="badge badge-danger navbar-badge">3</span>
        </a>
        !-->
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">

              <img src="{{asset('adminlte/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
              <!--    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>!-->
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">

              <img src="{{asset('adminlte/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">

              <img src="{{asset('adminlte/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
       <!-- <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>!-->
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color:white;" href="{{ route('logout') }}"  onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" >
                  <p>Cerrar Sesion</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white; data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      !-->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">

      <img src="{{ asset('adminlte/img/LogoColomtel1.PNG') }}" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-light">REGIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Sidebar user panel (optional) -->
      <li class="nav-item ">
            <a href="#" class="nav-link ">
            <img src="{{asset('adminlte/img/user2-160x160.jpg') }}" class="mr-2" height="40px" width="40px;" style="border-radius:20px;"  alt="User Image">
              <p>
            <!-- {{ Auth::user()->name }} {{Auth::user()->apellido}}!-->
           Administrador
           
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item  menu-open ">
                <a href="/usuarios/profile" class="nav-link  @if(isset($view_profile)) {{$view_profile}} @endif ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mi perfil</p>
                </a>
              </li>
              
            </ul>
          </li>
          <span class="mb-2"></span>
      <div class="user-panel mb-2 d-flex">
      
     
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input style="display:none" class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button style="display:none;" class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
    
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="/" class="nav-link @if(isset($home)) {{$home}}  @endif">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                  Home
                  <!-- <span class="right badge badge-danger">New</span>!-->
                  </p>
                </a>
              </li>
              @if( Auth::user()->rol=='administrador')
          <li class="nav-item @if(isset($create)) menu-open  @endif @if(isset($listar) ) menu-open @endif">
            <a href="#" class="nav-link @if(isset($create)) {{$create}} @endif @if(isset($listar) ) {{$listar}} @endif ">
              <i class="nav-icon fas fa-users"></i>
              <p>
             Administrar usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/usuarios/crear" class="nav-link @if(isset($create)) {{$create}} @endif">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Crear nuevo usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/usuarios/listar" class="nav-link @if(isset($listar)) {{$listar}} @endif">
                  <i class="far fa-eye  nav-icon"></i>
                  <p>Ver usuarios registrados</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if( Auth::user()->rol=='administrador'  )

          <li class="nav-item @if(isset($escaleras) || isset($motocicletas)  || isset($arnesyaparejos) ) menu-open @endif">
            <a href="#" class="nav-link @if(isset($escaleras) || isset($motocicletas) || isset($arnesyaparejos ) ) active @endif ">
              <i class="nav-icon fas fa-plus"></i>
              <p>
            Crear 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/crear/motocicletas" class="nav-link  @if(isset($motocicletas)) {{$motocicletas}} @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Motocicletas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/crear/escaleras" class="nav-link @if(isset($escaleras)) {{$escaleras}} @endif ">
                  <i class="far fa-circle  nav-icon"></i>
                  <p>Escaleras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/crear/arnesyaparejos" class="nav-link @if(isset($arnesyaparejos)) {{$arnesyaparejos}} @endif">
                  <i class="far fa-circle  nav-icon"></i>
                  <p>Arnes y Aparejos</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if( Auth::user()->rol=='administrador'  )

          <li class="nav-item @if(isset($view_motocicletas) || isset($view_escaleras)  || isset($view_arnesyaparejos) ) menu-open @endif">
            <a href="#" class="nav-link @if(isset($view_motocicletas) || isset($view_escaleras)  || isset($view_arnesyaparejos) ) active @endif ">
              <i class="nav-icon far fa-eye"></i>
              <p>
            Ver 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/ver/motocicletas" class="nav-link @if(isset($view_motocicletas)) active @endif  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Motocicletas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/ver/escaleras" class="nav-link @if(isset($view_escaleras)) active @endif ">
                  <i class="far fa-circle  nav-icon"></i>
                  <p>Escaleras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/ver/arnesyaparejos" class="nav-link @if(isset($view_arnesyaparejos)) active @endif">
                  <i class="far fa-circle  nav-icon"></i>
                  <p>Arnes y Aparejos</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <!--
          <li class="nav-item">
          
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
               <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          !-->
          @if( Auth::user()->rol=='administrador' || Auth::user()->rol=='tecnico' )

          <li class="nav-item @if(isset($crear_motocicletas) || isset($crear_escaleras)  || isset($crear_arnes) ) menu-open @endif">
            <a class="nav-link @if(isset($crear_motocicletas) || isset($crear_escaleras)  || isset($crear_arnes) ) active @endif ">
              <i class="nav-icon fas fa-list"></i>
              <p>
             Crear reportes de inspeccion
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/reportes/crear_motocicletas" class="nav-link @if(isset($crear_motocicletas)) {{ $crear_motocicletas}} @endif ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Motocicletas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/reportes/crear_escaleras" class="nav-link @if(isset($crear_escaleras)) {{ $crear_escaleras}} @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Escaleras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/reportes/crear_arnes" class="nav-link @if(isset($crear_arnes)) {{ $crear_arnes}} @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arnes y aparejos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if(isset($listar_arnes)|| isset($listar_escaleras) || isset($listar_motocicletas) ) menu-open @endif">
            <a href="#" class="nav-link @if(isset($listar_arnes)|| isset($listar_escaleras) || isset($listar_motocicletas) ) active @endif">
              <i class="nav-icon far fa-eye"></i>
              <p>
            Ver reportes de inspeccion
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="/reportes/listar/motocicletas" class="nav-link @if(isset($listar_motocicletas)) {{$listar_motocicletas}} @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Motocicletas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/reportes/listar/escaleras" class="nav-link @if(isset($listar_escaleras)) {{$listar_escaleras}} @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Escaleras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/reportes/listar/arnes" class="nav-link @if(isset($listar_arnes)) {{$listar_arnes}} @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arnes y Aparejos</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if( Auth::user()->rol=='administrador' || Auth::user()->rol=='tecnico' )

          <li class="nav-item">
          
          <a href="/permisos/crear" class="nav-link @if(isset($permiso_create)) {{$permiso_create}} @endif">
            <i class="nav-icon fas fa-th"></i>
            <p>
           Crear pemisos de trabajo
            <!-- <span class="right badge badge-danger">New</span>!-->
            </p>
          </a>
        </li>
        @endif
        @if( Auth::user()->rol=='administrador' || Auth::user()->rol=='hse' )

        <li class="nav-item">
          
          <a href="/permisos/listar" class="nav-link @if(isset($permiso_list)) {{$permiso_list}} @endif">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Ver permisos de trabajo
            <!-- <span class="right badge badge-danger">New</span>!-->
            </p>
          </a>
        </li>
        @endif
        @if( Auth::user()->rol=='administrador' || Auth::user()->rol=='tecnico' )

        <li class="nav-item">
          
          <a href="/permisos/listar" class="nav-link @if(isset($permiso_list)) {{$permiso_list}} @endif">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Ver mis permisos de trabajo
            <!-- <span class="right badge badge-danger">New</span>!-->
            </p>
          </a>
        </li>
         @endif

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="">
      <div class="">
        <div class="row ">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div >
        

        @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="{{asset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminlte/js/adminlte.min.js') }}"></script>
@include('usuarios.list_script')

</body>
</html>

@extends('admin.layout')
@section('content')
<ul>
<li><a href="#">Crear  nuevo usuario</a></li>
<li><a href="#">Ver usuarios registrados</a></li>
<li>Crear reportes de inspeccion</li>
    <ul>
        <li><a href="#">Crear reporte motocicletas</a></li>
        <li><a href="#">Crear reporte escaleras</a></li>
        <li><a href="#">Crear reporte arnes</a></li>
    </ul>
<li>Ve reportes de inspeccion</li>
   <ul>
        <li><a href="#">Ver reporte Motocicletas</a></li>
        <li><a href="#"> Ver reporte  Escaleras</a></li>
        <li><a href="#">Ver reporte Arnes</a></li>
    </ul>
<li><a href="#">Crear permisos de trabajo</a></li>
<li><a href="#">Ver permisos de trabajo</a></li>
<ul>
@endsection

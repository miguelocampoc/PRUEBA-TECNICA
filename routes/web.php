<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');


Auth::routes();
/* UsuariosController */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios/crear', 'UserController@create');
Route::post('/usuarios/store', 'UserController@store');
Route::post('/motocicletas/store', 'motocicletas@store');
Route::post('/escaleras/store', 'escaleras@store');
Route::post('/arnesyaparejos/store', 'arnesyaparejos@store');

Route::get('/usuarios/editar/{id}', 'UserController@edit');
Route::get('/usuarios/listar', 'UserController@index');
Route::post('/usuarios/update/{id}','UserController@update');
Route::get("/usuarios/destroy/{id}", 'UserController@destroy');
Route::get("/usuarios/profile", 'UserController@view_profile');

/* Fin UsuariosController */

/* ReportesController */
Route::get('/reportes/crear/motocicletas', 'ReportesController@crear_motocicletas');
Route::post('/reportes/crear/escaleras', 'ReportesController@crear_escaleras');
Route::get('/reportes/crear/arnes', 'ReportesController@crear_arnes');
Route::get('/reportes/editar/motocicletas', 'ReportesController@editar_motocicletas');
Route::get('/reportes/editar/escaleras', 'ReportesController@editar_escaleras');
Route::get('/reportes/editar/arnes', 'ReportesController@editar_arnes');
Route::get('/reportes/listar/motocicletas', 'ReportesController@listar_motocicletas');
Route::get('/reportes/listar/escaleras', 'ReportesController@listar_escaleras');
Route::get('/reportes/listar/arnes', 'ReportesController@listar_arnes');
Route::patch('/reportes/update','ReportesController@update');
Route::delete("/reportes/destroy", 'ReportesController@destroy');


/* Fin reportesController */

/*PermisoController */
Route::get('/permisos/crear', 'PermisoController@create');
Route::get('/permisos/editar', 'PermisoController@edit');
Route::get('/permisos/listar', 'PermisoController@list');
Route::patch('/permisos/update','PermisoController@update');
Route::delete("/reportes/destroy", 'PermisoController@destroy');
/* Fin PermisoController */

/*ElementController*/
Route::get('/crear/arnesyaparejos', 'ElementController@arnesyaparejos');
Route::get('/crear/motocicletas', 'ElementController@motocicletas');
Route::get('/crear/escaleras', 'ElementController@escaleras');
Route::get('/ver/arnesyaparejos', 'ElementController@listar_arnesyaparejos');
Route::get('/ver/motocicletas', 'ElementController@listar_motocicletas');
Route::get('/ver/escaleras', 'ElementController@listar_escaleras');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', function () {
    return view('admin.dashboard');
});

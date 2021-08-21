<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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


Route::get('/usuarios/editar/{id}', 'UserController@edit');
Route::get('/usuarios/listar', 'UserController@index');
Route::get('/usuarios/listar_all', 'UserController@listar_all');
Route::get('/usuarios/listar_act', 'UserController@listar_act');
Route::post('/usuarios/setting/{id}','UserController@settingUser');

Route::post('/usuarios/update/{id}','UserController@update');
Route::get("/usuarios/destroy/{id}", 'UserController@destroy');
Route::get("/usuarios/profile", 'UserController@view_profile');
Route::post("/usuarios/edit_profile", 'UserController@edit_profile');
Route::post("/usuarios/drop", 'UserController@destroy');


/* Vehiculos*/
Route::get('/crear/vehiculo', 'VehiculosController@create');
Route::get('/ver/vehiculos', 'VehiculosController@list');
Route::get('/ver/vehiculo/{id}/detalles', 'VehiculosController@detalles');

Route::get('/ver/vehiculos/edit/{id}', 'VehiculosController@edit');

Route::post('/vehiculos/store', 'VehiculosController@store');
Route::post('/vehiculo/update/{id}', 'VehiculosController@update');
Route::post('/vehiculo/drop', 'VehiculosController@drop');

/*Personas */
Route::post('/persona/store', 'PersonasController@store');


/* Fin Vehiculos*/

/* Conductores */
Route::get('/crear/persona', 'PersonasController@index');
Route::post('/conductor/store', 'conductoresController@store');

Route::get('/ver/conductores', 'conductores@list');
Route::get('/editar/conductores/{id}', 'conductores@edit');
/* Fin Conductores*/

/* Ordenes */
Route::get('/crear/orden', 'ordenes@create');
Route::get('/ver/personas', 'PersonasController@list');
Route::get('/ver/persona/edit/{id}', 'PersonasController@edit');
Route::post('/persona/update/{id}', 'PersonasController@update');
Route::post('/persona/drop', 'PersonasController@drop');

Route::get('/ver/ordenes/editar/{id}', 'ordenes@edit');
Route::post('/orden/store', 'ordenes@store');
Route::post('/orden/update/{id}', 'ordenes@update');
Route::post('/orden/drop', 'ordenes@drop');



/* Fin Ordenes*/

/* Consultas */

Route::get('/consulta/placa', 'consultas@placa');
Route::get('/consulta/fecha', 'consultas@fecha');

Route::post('/consultar/placa', 'consultas@consult_placa');
Route::post('/consultar/fecha', 'consultas@consult_fecha');

/* Fin Ordenes*/

/* Programacion */
Route::get('/crear/programacion', 'programaciones@create');
Route::get('/ver/programaciones', 'programaciones@list');
Route::get('/ver/programaciones/editar/{id}', 'programaciones@edit');

Route::post('/programaciones/store', 'programaciones@save');
Route::post('/programaciones/update/{id}', 'programaciones@update');
Route::post('/programacion/drop','programaciones@drop');

/* Fin programacion*/

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', function () {
    return view('admin.dashboard');
});
Route::get('/files/private/{file}', 'photoController@files');



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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios/crear', 'UserController@create');
Route::get('/usuarios/editar', 'UserController@edit');
Route::get('/usuarios/listar', 'UserController@index');
Route::patch('/usuarios/update','UserController@update');
Route::delete("/usuarios/drop", 'UserController@destroy');


Route::get('/reportes/crear', 'ReportesController@create');
Route::get('/reportes/editar', 'ReportesController@edit');
Route::get('/reportes/listar/motocicletas', 'ReportesController@listar_motocicletas');
Route::get('/reportes/listar/escaleras', 'ReportesController@listar_escaleras');
Route::get('/reportes/listar/arnes', 'ReportesController@listar_arnes');
Route::patch('/reportes/update','ReportesController@update');
Route::delete("/reportes/destroy", 'ReportesController@destroy');

Route::get('/permisos/crear', 'PermisoController@create');
Route::get('/permisos/editar', 'PermisoController@edit');
Route::get('/permisos/listar', 'PermisoController@list');
Route::patch('/permisos/update','PermisoController@update');
Route::delete("/reportes/destroy", 'PermisoController@destroy');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', function () {
    return view('admin.dashboard');
});

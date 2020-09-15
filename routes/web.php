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

Route::get('/', function () {
    return view('welcome');   
});



Route::get('/', function () {
    return view('home');   
});

Route::get('login', 'LoginController@login');

Route::get('usuarios', 'UsuarioController@index');
Route::get('usuarios/create','UsuarioController@create');
Route::post('usuarios/store','UsuarioController@store');

Route::get('clientes', 'ClienteController@index');
Route::get('clientes/create', 'ClienteController@create');
Route::post('clientes/store', 'ClienteController@store');

Route::get('empleados', 'EmpleadoController@index');
Route::get('empleados/create', 'EmpleadoController@create');
Route::post('empleados/store', 'EmpleadoController@store');

Route::get('catalogos', 'CatalogoController@index');
Route::get('catalogos/create', 'CatalogoController@create');
Route::post('catalogos/store', 'CatalogoController@store');

Route::get('detalle_citas', 'DetalleController@index');
Route::get('detalle_citas/create', 'DetalleController@create');
Route::post('detalle_citas/store', 'DetalleController@store');

Route::get('citas', 'CitaController@index');
Route::get('citas/create', 'CitaController@create');
Route::post('citas/store', 'CitaController@store');
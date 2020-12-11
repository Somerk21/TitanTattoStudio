<?php

use Illuminate\Support\Facades\Route;
use App\User;


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

// Route::get('/', function () {
//     return view('welcome');   
// });

Route::get('/', function () {
    return view('home');   
});
//Route::get('home', '');


Route::get('login', 'LoginController@login');
Route::post('entrar', 'LoginController@entrar');
Route::get('registrar', 'LoginController@RegisView');
Route::get('registrar/registrar', 'LoginController@registrar');

Route::get('inicio', 'LoginController@mostrar');
Route::get('employee', 'LoginController@mostrarempleado');
Route::get('administr', 'LoginController@mostraradmin');
Route::get('logout', 'LoginController@logout');

//Route::get('loginn/vali', 'LoginController@vali');


//Route::resource('usuarios','UsuarioController');
Route::get('usuarios', 'UsuarioController@index');
Route::get('usuarios/login', 'UsuarioController@login');
Route::get('usuarios/create','UsuarioController@create');
Route::post('usuarios/store','UsuarioController@store');
Route::post('usuarios/destroy','UsuarioController@destroy');
Route::get('usuarios/{Id_Usuario}/edit','UsuarioController@edit');
Route::put('usuarios/{Id_Usuario}','UsuarioController@update');
Route::get('usuarios/inhabilitar/{Id_Usuario}', 'UsuarioController@inhabilitar');
Route::get('usuarios/habilitar/{Id_Usuario}', 'UsuarioController@habilitar');


//Route::resource('clientes','ClienteController');
Route::get('clientes', 'ClienteController@index');
//Route::get('clientes', 'ClienteController@inadmin');
Route::get('clientes/create','ClienteController@create');
Route::post('clientes/store','ClienteController@store');
Route::get('clientes/{id}/edit','ClienteController@edit');
Route::put('clientes/{id}','ClienteController@update');
Route::get('clientes/{id}','ClienteController@updateStatus');

Route::get('clientes/inhabilitar/{id}', 'ClienteController@inhabilitar');
Route::get('clientes/habilitar/{id}', 'ClienteController@habilitar');

//Route::get('clientes/{Id_Cliente}','ClienteController@status');
Route::post('clientes/destroy','ClienteController@destroy');

//Route::resource('empleados','EmpleadoController');
Route::get('empleados', 'EmpleadoController@index');
//Route::get('empleados', 'EmpleadoController@inempleado');
Route::get('empleados/create','EmpleadoController@create');
Route::post('empleados/store','EmpleadoController@store');
Route::get('empleados/{id}/edit','EmpleadoController@edit');
Route::put('empleados/{id}','EmpleadoController@update');
Route::post('empleados/destroy','EmpleadoController@destroy');

Route::get('empleados/inhabilitar/{id}', 'EmpleadoController@inhabilitar');
Route::get('empleados/habilitar/{id}', 'EmpleadoController@habilitar');

Route::resource('catalogos', 'CatalogosController');

//Route::resource('detalle_citas','DetalleController');
Route::get('detalle_citas', 'DetalleController@index');
//Route::get('detalle_citas', 'DetalleController@indetalle');
Route::get('detalle_citas/create','DetalleController@create');
Route::post('detalle_citas/store','DetalleController@store');
Route::get('detalle_citas/{Id_Detalle}/edit','DetalleController@edit');
Route::put('detalle_citas/{Id_Detalle}','DetalleController@update');
Route::post('detalle_citas/destroy','DetalleController@destroy');
Route::get('detalle_citas/inhabilitar/{Id_Usuario}', 'DetalleController@inhabilitar');
Route::get('detalle_citas/habilitar/{Id_Usuario}', 'DetalleController@habilitar');

//Route::resource('clcitas','ClicitaController');

// Route::get('citas/create','CitaController@create');
// Route::post('citas/store','CitaController@store');
// Route::get('citas/{Id_cita}/edit','CitaController@edit');
// Route::put('citas/{Id_cita}','CitaController@update');

// Route::get('citas/pendiente/{Id_cita}', 'CitaController@pendiente');
// Route::get('citas/finalizar/{Id_cita}', 'CitaController@finalizar');
// Route::get('citas/cancelar/{Id_cita}', 'CitaController@cancelar');

// Citas del administrador
Route::get('clcitas/insertar', 'ClicitaController@vistaCrear');
Route::get('clcitas/vistaConsultar', 'ClicitaController@vistaConsultar');
Route::post('clcitas/employStore', 'ClicitaController@employStore');
Route::get('clcitas/{Id_clcita}/edit','ClicitaController@edit');
Route::put('clcitas/{Id_clcita}','ClicitaController@update');
Route::get('clcitas/pendiente/{Id_clcita}', 'ClicitaController@pendiente');
Route::get('clcitas/finalizar/{Id_clcita}', 'ClicitaController@finalizar');

//Citas del cliente
Route::get('clcitas', 'ClicitaController@index');
Route::get('clcitas/create', 'ClicitaController@create');
Route::post('clcitas/store','ClicitaController@store');
Route::get('clcitas/cancelar/{Id_clcita}', 'ClicitaController@cancelar');


//Route::get('loginn', 'LoginController@index');
//Route::get('loginn/login', 'LoginController@loginn');
//Route::get('loginn/registrar', 'LoginController@regis');


Route::get('cataladmin', 'CatalogosController@adminis');
Route::get('catalogos/cuidado', 'CatalogosController@cuidado');


Route::get('perfiles', 'PerfilController@index');
//Route::get('perfiles', 'PerfilController@inperfil');
Route::get('perfiles/{id}/edit','PerfilController@edit');
Route::put('perfiles/{id}','PerfilController@update');




//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

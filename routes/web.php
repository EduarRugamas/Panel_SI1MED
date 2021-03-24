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
    return view('Home.home');
});
//Route::get('panel_new', function (){
//   return view('Plantillas.plantilla_panel_new');
//});

Route::resource('noticias','NoticiasController');
Route::resource('publicidad','PublicidadesController');

//Rutas de usuarios doctores new
Route::resource('UsuariosDoctors','Usuarios_doctores_newController');
//Route::get('UsuariosDoctors','Usuarios_doctores_newController@index')->name('UsuariosDoctors.index');
//Route::post('UsuariosDoctors','Usuarios_doctores_newController@store')->name('UsuariosDoctors.store');
//Route::get('UsuariosDoctors/create','Usuarios_doctores_newController@create')->name('UsuariosDoctors.create');
//Route::get('UsuariosDoctors/{usuarios_doctores}/edit','Usuarios_doctores_newController@edit')->name('UsuariosDoctors.edit');
//Route::patch('UsuariosDoctors/{usuarios_doctores}','Usuarios_doctores_newController@update')->name('UsuariosDoctors.update');
//Route::delete('UsuariosDoctors/{usuarios_doctores}','Usuarios_doctores_newController@destroy')->name('UsuariosDoctors.destroy');

//Ruta para usuarios en general
Route::resource('Users','UsuariosNewController');
//Route::get('UsersNew','UsuariosNewController@index')->name('UsersNew.index');
//Route::post('UsersNew','UsuariosNewController@store')->name('UsersNew.store');
//Route::get('UsersNew/create','UsuariosNewController@create')->name('UsersNew.create');

Route::get('/panel', function (){
    return view('Plantillas.test');
});
Route::get('/panels', function (){
    return view('Plantillas.plantilla');
});

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('panel2',function (){
//   return view('Plantillas.plantilla_panel_2');
//});

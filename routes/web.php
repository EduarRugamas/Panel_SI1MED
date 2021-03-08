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
//   return view('Plantillas.plantilla_panel_new');cl
//});

Route::resource('noticias','NoticiasController');
Route::resource('publicidad','PublicidadesController');

//Rutas de usuarios doctores new
Route::get('UsuariosDoctors','Usuarios_doctores_newController@index')->name('UsuariosDoctors.index');
Route::post('UsuariosDoctors','Usuarios_doctores_newController@store')->name('UsuariosDoctors.store');
Route::get('UsuariosDoctors/create','Usuarios_doctores_newController@create')->name('UsuariosDoctors.create');
Route::get('UsuariosDoctors/{usuarios_doctores}/edit','Usuarios_doctores_newController@edit')->name('UsuariosDoctors.edit');
Route::patch('UsuariosDoctors/{usuarios_doctores}','Usuarios_doctores_newController@update')->name('UsuariosDoctors.update');
Route::delete('UsuariosDoctors/{usuarios_doctores}','Usuarios_doctores_newController@destroy')->name('UsuariosDoctors.destroy');


//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('panel2',function (){
//   return view('Plantillas.plantilla_panel_2');
//});

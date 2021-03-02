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
Route::get('UsuariosDoctors','Usuarios_doctores_newController@index');
Route::get('UsuariosDoctors/create','Usuarios_doctores_newController@create');


//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('panel2',function (){
//   return view('Plantillas.plantilla_panel_2');
//});

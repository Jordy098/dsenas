<?php

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
//Ruta Login
Route::get('/login', 'UsuarioController@index2');
//Ruta Presentacion
Route::get('/inicio', 'UsuarioController@index');

//Ruta Administrador
Route::group(['prefix'=>'admin'],function(){
	
	Route::get('view','UsuarioController@admin');

});
//Ruta crear categoria
Route::group(['prefix'=>'admin'],function(){
	
	Route::resource('categorias','CategoriasController');

});

//Ruta Registrar Usuario	
Route::resource('usuarios','UsuarioController');

/*Route::group(['prefix'=>'usuarios'],function(){
	
	Route::get('view/{id}',[
		'uses'=>'UsuarioController@view',
		'as'=>'usuariosView'
		]);

});*/


//Auth::routes();

/*Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');*/

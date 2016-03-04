<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//En este fichero php estableceremos las rutas de nuestra app, no es buena
//practica meter codigo mas alla de las rutas.

//Abajo tenemos las denominadas - Funciones anonimas autoejecutables

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('about', function () {
//     return view ('about');
// });
//
// Route::get('sobre-nosotros', function () {
//     return view ('paginas.about');
// });

Route::get('contacto', function () {

	$personas = ['Javi','Juan','Ale','Fran','Joaquin'];

	// return view('paginas.contacto', ['personas' => $personas]);
  //
	// compact — Crear un array que contiene variables y sus valores


	return view('paginas.contacto', compact('personas'));


	// return view('paginas.contacto')->with('personas', $personas);
	// return view('paginas.contacto')->with(['personas' => $personas]);
	// return view('paginas.contacto')->withPersonas($personas);

});

//Controlador : Paginas.php
//Class Paginas extends... {
//    	...
//		function contacto () {
//			return view('contacto');
//		}
//		...
//}
//Route::get('contacto', 'Paginas@contacto');

//Hacer una llamada a un controlador
//Route::get('/', NombreControlador@metodo);

//En la terminal php artisan make:controller NOMBRECONTROLADOR

Route::get('/', function(){
	return redirect('monumentos');
});

//Entre llaves nos encontraremos los parametros
Route::get('monumentos', 'MonumentosController@index');
Route::get('monumentos/{monumento}', 'MonumentosController@show')->where('monumento','[0-9]+');
//Esta funcion no es valida si tienes que pasarle mas de un parametro
//para ello se estableceran por array
// Route::get('monumentos/{uno}/{dos}', 'MonumentosController@show');
Route::get('opiniones/{opinione}/edit', 'OpinionesController@edit');
Route::patch('opiniones/{opinione}', 'OpinionesController@update');

Route::post('monumentos/{monumento}', 'OpinionesController@store')->where('monumento','[0-9]+');
Route::get('about', 'MonumentosController@aboutIndex');

Route::delete('opiniones/{opinione}', 'OpinionesController@delete');
// Route::get('opiniones/{opinione}/del', 'OpinionesController@delete');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

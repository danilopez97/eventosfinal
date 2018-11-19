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


Route::get('/', 'EventoController@index');

Route::get('/mostrarevento', 'EventoController@index');
Route::get('/mostrarpersona', 'PersonaController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inscripcion/listarinscripcion/{idpersona}', 'InscripcionController@listarinscripciones');
Route::get('/inscripcion/cambiarasignacion', 'InscripcionController@inscripciones');


Route::group(['middleware' => 'auth'], function () {

    // Las rutas que incluyas aquí pasarán por el middleware 'auth'
Route::post('persona/store', 'PersonaController@store');
Route::get('persona/create', 'PersonaController@create');
Route::get('persona/edit/{idpersona}', 'PersonaController@edit');
Route::post('persona/update/{idpersona}', 'PersonaController@update');
Route::get('persona/delete/{idpersona}', 'PersonaController@delete');


Route::post('evento/store', 'EventoController@store');
Route::get('evento/create', 'EventoController@create');
Route::get('evento/edit/{idevento}', 'EventoController@edit');
Route::post('evento/update/{idevento}', 'EventoController@update');
Route::get('evento/delete/{idevento}', 'EventoController@delete');


Route::get('/personasinscritas', 'InscripcionController@index');



Route::post('inscripcion/store/{idpersona}', 'InscripcionController@store');
Route::get('inscripcion/show/{idpersona}', 'InscripcionController@show');

Route::get('inscripcion/create', 'InscripcionController@create');
Route::get('inscripcion/edit/{idinscripcion}', 'InscripcionController@edit');
Route::post('inscripcion/update/{idinscripcion}', 'InscripcionController@update');


//listar inscripcion

Route::get('inscripcion/desasignar/{idinscripcion}', 'EventoController@desasignar');
Route::get('inscripcion/pasar/{idinscripcion}', 'InscripcionController@pasar');



Route::get('/inscripcion/eliminar/{idevento}', 'InscripcionController@eliminar');


Route::get('inscripcion/delete/{idinscripcion}', 'InscripcionController@delete');

});






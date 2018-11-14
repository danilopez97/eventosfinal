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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    // Las rutas que incluyas aquí pasarán por el middleware 'auth'
    Route::get('/mostrarpersona', 'PersonaController@index');
Route::post('persona/store', 'PersonaController@store');
Route::get('persona/create', 'PersonaController@create');
Route::get('persona/edit/{idpersona}', 'PersonaController@edit');
Route::post('persona/update/{idpersona}', 'PersonaController@update');
Route::get('persona/delete/{idpersona}', 'PersonaController@delete');

Route::get('/mostrarevento', 'EventoController@index');
Route::post('evento/store', 'EventoController@store');
Route::get('evento/create', 'EventoController@create');
Route::get('evento/edit/{idevento}', 'EventoController@edit');
Route::post('evento/update/{idevento}', 'EventoController@update');
Route::get('evento/delete/{idevento}', 'EventoController@delete');


Route::post('inscripcion/store', 'InscripcionController@store');
Route::get('inscripcion/create', 'InscripcionController@create');

});






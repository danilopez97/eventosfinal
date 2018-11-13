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

Route::get('/mostrarpersona', 'PersonaController@index');
Route::post('persona/store', 'PersonaController@store');
Route::get('persona/create', 'PersonaController@create');
Route::get('persona/edit/{idpersona}', 'PersonaController@edit');
Route::post('persona/update/{idpersona}', 'PersonaController@update');
Route::get('persona/delete/{idpersona}', 'PersonaController@delete');
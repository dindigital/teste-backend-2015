<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function(){
//	return view('index');
//});

Route::get('doctor/{id}', 'MedicoController@show');

Route::get('appontment_success','FormularioController@index');

Route::get('/', 'MedicoController@index');

Route::post('store', 'FormularioController@store');

//Route::get('enviarEmail/{email}', 'FormularioController@enviarEmail');
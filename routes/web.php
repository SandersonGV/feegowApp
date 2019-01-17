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

Route::get('/', "clinicaController@index");
Route::post('/clinica/agendamento', "clinicaController@store");
Route::get('/clinica/profissionais/{id}', "clinicaController@getProfissionais");
Route::get('/clinica/origens', "clinicaController@getOrigens");

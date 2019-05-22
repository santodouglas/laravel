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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'AppIdeaController@index');

Route::get('/formAdicionar', 'AppIdeaController@formAdicionar');
Route::post('/adicionar', 'AppIdeaController@adicionar');
Route::get('/excluir/{id}', 'AppIdeaController@excluir');
Route::get('/editar/{id}', 'AppIdeaController@formEditar');
Route::post('/editar', 'AppIdeaController@editar');

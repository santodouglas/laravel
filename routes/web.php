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

//categorias
Route::get('/categorias', 'CategoriaController@categorias');
Route::get('/categorias/form-adicionar', 'CategoriaController@formAdicionar');
Route::post('/categorias/adicionar', 'CategoriaController@adicionar');
Route::get('/categorias/excluir/{id}', 'CategoriaController@excluir');
Route::get('/categorias/editar/{id}', 'CategoriaController@form_editar');
Route::post('/categorias/editar', 'CategoriaController@editar');

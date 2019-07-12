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


Route::get('/', 'ParginasController@index');

Route::get('/welcome','ParginasController@about');

Route::get('/alunos/listar','ParginasController@listar');

Route::resource('/estados','EstadoController');

Route::resource('/cidades','CidadeController');

Route::resource('/regiao','RegiaoController');

Route::resource('/aluno', 'AlunoController');

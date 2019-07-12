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



route::get('/', 'PrincipalController@index');


Route::resource('/procedures','ProceduresController');

Route::get('/gestão','ProceduresController@gestao');

Route::resource('/tests','TestsController');

Route::get('/exame','TestsController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/', 'ContatosController@index')->name('index');
Route::get('lista/{letra}', 'ContatosController@lista')->name('lista');
Route::get('cadastro', 'ContatosController@cadastro')->name('cadastro');
Route::post('enviar', 'ContatosController@enviar')->name('enviar');


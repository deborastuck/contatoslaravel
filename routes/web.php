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

//Route::get('/lista', function () {
//    return view('lista', array('contatos' => Agenda\Contato::all()));
//});


//Route::post('/enviar', function(Illuminate\Http\Request $request){
 
//	$contato = new Agenda\Contato();
//	$contato->nome = $request->get('nome');
//	$contato->email = $request->get('email');
//	$contato->telefone = $request->get('telefone');
 
//	$contato->save();
 
//	echo "Sua mensagem foi armazenada com sucesso! Código: " . $contato->id;
//});
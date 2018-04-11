<?php

namespace Agenda\Http\Controllers;

use Illuminate\Http\Request;
use Agenda\Contato;
use Agenda\Http\Requests\ContatoValidarRequest;

class ContatosController extends Controller{

   public function index(){
       return view('index');
   }

    public function lista($letra){
        if($letra == '*'){
            $array_contatos = Contato::orderBy('nome')->get();
        }else{
            $array_contatos = Contato::letraNome($letra);
        }
        return view('lista', [
            'contatos' => $array_contatos,
            'filtro' => $letra
        ]);
    }

    public function cadastro(){
        return view('cadastro');
    }

    public function enviar(ContatoValidarRequest $request, Contato $contato){
	$contato->nome = $request->get('nome');
	$contato->email = $request->get('email');
	$contato->telefone = $request->get('telefone');
 
	$salva = $contato->save();
        if($salva){
            return redirect()->action('ContatosController@index')->with($salva)->with('cadastroSucesso', $contato->nome );
        }else{
            return redirect()->action('ContatosController@index')->with($salva)->with('cadastroErro', $contato->nome );
        }
    }
}

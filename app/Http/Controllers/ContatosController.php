<?php

namespace Agenda\Http\Controllers;

use Illuminate\Http\Request;
use Agenda\Contato;
use \Agenda\Http\Requests\IValidarRequest;

class ContatosController extends Controller{

    public function index(){
        return view('index');
    }

    public function lista($letra){
        //exibe lista com Todos os contatos em ordem alfabética
        if($letra == '*'){
            $array_contatos = Contato::orderBy('nome')->get();
        }else{
            //exibe lista com os contatos em ordem alfabética de acordo com a busca por inicial do nome
            $array_contatos = Contato::letraNome($letra);
        }
        return view('lista', [
            'contatos' => $array_contatos,
            'filtro' => $letra
        ]);
    }
    
    //exibe página de cadastro
    public function cadastro(){
        return view('cadastro');
    }

    //persiste dados do contato no Banco de Dados
    public function enviar(IValidarRequest $request, Contato $contato){
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

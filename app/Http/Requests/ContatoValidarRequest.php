<?php

namespace Agenda\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoValidarRequest extends FormRequest implements IValidarRequest{
    /**
     * Determina se usuário é autorizado a fazer a requisição.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Regras de validação para requisição.
     *
     * @return array
     */
    public function rules(){
        return [
            'nome' => 'required',
            'telefone' => 'numeric'
        ];
    }
}

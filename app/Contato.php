<?php

namespace Agenda;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model{

    protected $fillable = [
        'id',
        'nome',
        'telefone',
        'email'
    ];

    protected $table = 'contatos';
    
    public static function letraNome($letra){
        return static::where('nome', 'LIKE', $letra . '%')
            ->orderByRaw('nome')
            ->get();
    }
}

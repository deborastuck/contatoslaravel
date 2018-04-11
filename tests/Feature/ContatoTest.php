<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContatoTest extends TestCase{
    
    //testa página inicial (index)
    public function testContatoIndex(){
        $this->get('/')->assertStatus(200);
    }

    //testa dado persistido no Banco de Dados
    public function testBancoDados(){
        $this->assertDatabaseHas('contatos', [
            'email' => 'deborastuck@gmail.com'
        ]);
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InterfaceTest extends TestCase
{
    public function testInterfaceIndex(){
        $this->get('/')->assertStatus(200);
    }
}

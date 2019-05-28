<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_lista_usuarios()
    {
        $response = $this->get('/usuarios')
        ->assertStatus(200)
        ->assertsee('Usuarioslistos');
    }
}

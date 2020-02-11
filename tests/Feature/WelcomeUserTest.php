<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_welcomes_users_with_nickname(){
        $this->get('saludo/pepe/pepino')
        ->assertStatus(200)
        ->assertSee('Bienvenido pepe, tu apodo es pepino');
    }

    public function test_it_welcomes_users_without_nickname(){
        $this->get('saludo/pepe')
        ->assertStatus(200)
        ->assertSee('Bienvenido pepe, no tienes apodo');//Compara lo que sale en pantalla
    }
}

/*
Cread una ruta, con su prueba correspondiente /usuarios/{ID del usuario aquí}/edit

Crear en userModuleTest

Desafio adicional
La ID solo debe ser un entero y deberías escribir una prueba para comprobar
comprobar que la URL /usuarios/texto/edit no es válido

Que es el standar PSR-4
*/
<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_load_the_user_list_page()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios');

    }

    public function test_it_load_user_details_page(){
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando el detalle del usuario 5');
    }

    public function test_it_loads_the_new_users_page(){
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Crea un nuevo usuario');
    }

    public function test_it_loads_the_users_edit_page(){
        $this->get('/usuarios/raul/edit')
        ->assertStatus(200)
        ->assertSee('Puedes editar tus datos de usuario aquí raul');
    }
}

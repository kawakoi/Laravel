<?php

namespace Tests\Feature;

use Tests\TestCase;
//todas las clases de laravel extienden de Illuminate
use Illuminate\Foundation\Testing\RefreshDatabase;


//Esta clase indica si la ruta funciona o no funciona
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()//lanza una petición GET a la ruta
    {
        $response = $this->get('/');//Devuelve un error 400

        $response->assertStatus(200);//esta ruta significa que va bien
    }
}

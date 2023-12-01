<?php

namespace Tests\CreacionUsuarios;

use Tests\TestCase;
use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuarioTest extends TestCase
{
    //use RefreshDatabase;

    public function testCrearUsuario()
    {
        // Crea un usuario de prueba
        $usuario = factory(Usuario::class)->make([
            'nombre' => 'Jose',
            'apellidos' => 'Sanhueza Dos',
            'email' => 'jo.sa@gmail.com',
        ]);

        // Agrega el usuario a la base de datos
        Usuario::create([
            'nombre' => $usuario->nombre,
            'apellidos' => $usuario->apellidos,
            'email' => $usuario->email,
        ]);

        // Verifica que el usuario exista en la base de datos
        $this->assertDatabaseHas('usuarios', [
            'nombre' => 'Jose',
            'apellidos' => 'Sanhueza Dos',
            'email' => 'jo.sa@gmail.com',
        ]);
    }
}

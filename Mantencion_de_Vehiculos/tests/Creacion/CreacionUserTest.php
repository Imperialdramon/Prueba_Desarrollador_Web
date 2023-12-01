<?php

namespace Tests\Creacion;

use Tests\TestCase;
use App\Models\Usuario;
use Illuminate\Support\Facades\Artisan;

class CreacionUserTest extends TestCase
{
    // Prueba de creación de usuario
    public function test_CrearUsuario(): void
    {
        // Debido a que es una BD en memoria, se crean los datos con la migración
        Artisan::call('migrate');

        // Crea un usuario de prueba
        $usuario = Usuario::create([
            'nombre' => 'Test User',
            'apellidos' => 'Don Test',
            'email' => 'test@gmail.com',
        ]);

        // Agrega el usuario a la base de datos
        Usuario::create([
            'nombre' => $usuario->nombre,
            'apellidos' => $usuario->apellidos,
            'email' => $usuario->email,
        ]);

        // Se verifica que el usuario exista en la base de datos
        $this->assertDatabaseHas('usuarios', [
            'nombre' => 'Test User',
            'apellidos' => 'Don Test',
            'email' => 'test@gmail.com',
        ]);
    }
}

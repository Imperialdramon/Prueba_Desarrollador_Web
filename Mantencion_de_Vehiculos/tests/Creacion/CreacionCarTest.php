<?php

namespace Tests\Creacion;

use Tests\TestCase;
use App\Models\Usuario;
use Illuminate\Support\Facades\Artisan;

class CreacionCarTest extends TestCase
{
    //use RefreshDatabase;

    // Prueba de creación de usuario
    public function test_CrearVehiculo(): void
    {
        // Debido a que es una BD en memoria, se crean los datos con la migración
        Artisan::call('migrate');

        // Crea un vehiculo de prueba
        $vehiculo = Vehiculo::create([
            'nombre' => 'Test User',
            'apellidos' => 'Don Test',
            'email' => 'test@gmail.com',
        ]);

        // Agrega el vehiculo a la base de datos
        Usuario::create([
            'nombre' => $usuario->nombre,
            'apellidos' => $usuario->apellidos,
            'email' => $usuario->email,
        ]);

        // Se verifica que el vehiculo exista en la base de datos
        $this->assertDatabaseHas('usuarios', [
            'nombre' => 'Test User',
            'apellidos' => 'Don Test',
            'email' => 'test@gmail.com',
        ]);
    }
}

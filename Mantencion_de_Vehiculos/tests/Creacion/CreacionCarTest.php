<?php

namespace Tests\Creacion;

use Tests\TestCase;
use App\Models\Vehiculos;
use Illuminate\Support\Facades\Artisan;

class CreacionCarTest extends TestCase
{
    // Prueba de creación de usuario
    public function test_CrearVehiculo(): void
    {
        // Debido a que es una BD en memoria, se crean los datos con la migración
        Artisan::call('migrate');

        // Crea un vehiculo de prueba
        $vehiculo = Vehiculos::create([
            'marca' => 'Testing',
            'modelo' => 'Test9000',
            'año' => '2023',
            'dueño' => '1',
            'precio' => '1000000',
        ]);

        // Agrega el vehiculo a la base de datos
        Vehiculos::create([
            'marca' => $vehiculo->marca,
            'modelo' => $vehiculo->modelo,
            'año' => $vehiculo->año,
            'dueño' => $vehiculo->dueño,
            'precio' => $vehiculo->precio,
        ]);

        // Se verifica que el vehiculo exista en la base de datos
        $this->assertDatabaseHas('vehiculos', [
            'marca' => 'Testing',
            'modelo' => 'Test9000',
            'año' => '2023',
            'dueño' => '1',
            'precio' => '1000000',
        ]);
    }
}

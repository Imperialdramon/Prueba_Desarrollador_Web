<?php

namespace Tests\CreacionVehiculos;

use Tests\TestCase;
use App\Models\Vehiculos;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VehiculosTest extends TestCase
{
    //use RefreshDatabase;

    public function testCrearVehiculo()
    {
        // Crea un vehiculo de prueba
        $vehiculo = factory(Vehiculos::class)->make([
            'marca' => 'Toyota',
            'modelo' => 'F 41',
            'año' => '2000',
            'dueño' => '1',
            'precio' => '100000',
        ]);

        // Agrega el vehiculo a la base de datos
        Vehiculos::create([
            'marca' => $vehiculo->marca,
            'modelo' => $vehiculo->modelo,
            'año' => $vehiculo->año,
            'dueño' => $vehiculo->dueño,
            'precio' => $vehiculo->precio,
        ]);

        // Verifica que el vehiculo exista en la base de datos
        $this->assertDatabaseHas('vehiculos', [
            'marca' => 'Toyota',
            'modelo' => 'F 41',
            'año' => '2000',
            'dueño' => '1',
            'precio' => '100000',
        ]);
    }
}

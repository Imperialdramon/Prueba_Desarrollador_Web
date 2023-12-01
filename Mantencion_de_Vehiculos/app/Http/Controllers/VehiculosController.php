<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return('Vehiculo.Crear_Vehiculo');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Con se crea un registro
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Con este se almacenan las cosas en la BD
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculos $vehiculos)
    {
        // Con este se puede ver un registro de la BD
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculos $vehiculos)
    {
        // Con este se puede ver los datos a actualizar y los posiciona en una vista
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehiculos $vehiculos)
    {
        // Con este se puede actualizar un registro de la BD
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculos $vehiculos)
    {
        // Con este se elimina un registro de la BD
    }
}

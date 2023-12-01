<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Esto es para la vista de inicio de usuarios
        $usuarios = Usuario::all();
        return view('Usuarios',compact('usuarios'));
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
    public function show(Usuario $usuario)
    {
        // Con este se puede ver un registro de la BD

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        // Con este se puede ver los datos a actualizar y los posiciona en una vista

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        // Con este se puede actualizar un registro de la BD

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        // Con este se elimina un registro de la BD

    }
}

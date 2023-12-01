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
        return view('Usuario.Crear_Usuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Con este se almacenan las cosas en la BD
        $usuario = Usuario::create([
            'nombre' => $request->post('nombre'),
            'apellidos' => $request->post('apellidos'),
            'email' => $request->post('email'),
        ]);
        // Redirección a la vista de muestra
        return redirect()->route('usuarios.index')->with("success","Se ha agregado el usuario correctamente");
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
    public function edit($id)
    {
        // Con este se puede ver los datos a actualizar y los posiciona en una vista
        $usuario = Usuario::find($id);
        return view('Usuario.Actualizar_Usuario',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Con este se puede actualizar un registro de la BD
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->post('nombre');
        $usuario->apellidos = $request->post('apellidos');
        $usuario->email = $request->post('email');
        $usuario->save();
        // Redirección a la vista de muestra
        return redirect()->route('usuarios.index')->with("success","Se ha actualizado el usuario correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        // Con este se elimina un registro de la BD

    }
}

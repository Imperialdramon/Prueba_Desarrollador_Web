<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use App\Models\Historial;
use App\Models\Usuario;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vehiculos = Vehiculos::all();
        return view('Vehiculos',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Con este se crea un registro
        return view('Vehiculo.Crear_Vehiculo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Se revisa si existe un usuario con la id que se está registrando
        $existeusuario = Usuario::where('id', $request->post('dueño'))->first();

        if ($existeusuario) { // El usuario existe, entonces se agrega el vehiculo

            // Con este se almacenan las cosas en la BD
            $vehiculo = Vehiculos::create([
                'marca' => $request->post('marca'),
                'modelo' => $request->post('modelo'),
                'año' => $request->post('año'),
                'dueño' => $request->post('dueño'),
                'precio' => $request->post('precio'),
            ]);
            // Se agrega al historial
            $historial = Historial::create([
                'vehiculo' => $vehiculo->id,
                'dueño' => $vehiculo->dueño,
            ]);
            // Redirección a la vista de muestra
            return redirect()->route('vehiculos.index')->with("success","Se ha agregado el vehiculo correctamente");

        } else { // El usuario no existe, por lo tanto no se puede agregar el vehículo

            // Puedes realizar otras acciones después de agregar el usuario
            return redirect()->route('vehiculos.index')->with("failed","No se ha podido agregar el vehículo porque el usuario no existe");
        }
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
    public function edit($id)
    {
        // Con este se puede ver los datos a actualizar y los posiciona en una vista
        $vehiculo = Vehiculos::find($id);
        return view('Vehiculo.Actualizar_Vehiculo',compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Con este se puede actualizar un registro de la BD

        // Se revisa si existe un usuario con la id que se está registrando
        $existeusuario = Usuario::where('id', $request->post('dueño'))->first();

        if ($existeusuario) { // El usuario existe, entonces se agrega el vehiculo

            // Se modifica el vehiculo
            $vehiculo = Vehiculos::find($id);
            $vehiculo->marca = $request->post('marca');
            $vehiculo->modelo = $request->post('modelo');
            $vehiculo->año = $request->post('año');
            $vehiculo->dueño = $request->post('dueño');
            $vehiculo->precio = $request->post('precio');
            $vehiculo->save();

            // Se agrega al historial
            $historial = Historial::create([
                'vehiculo' => $id,
                'dueño' => $vehiculo->dueño,
            ]);

            // Redirección a la vista de muestra
            return redirect()->route('vehiculos.index')->with("success","Se ha agregado el vehiculo correctamente");

        } else { // El usuario no existe, por lo tanto no se puede modificar el vehículo

            return redirect()->route('vehiculos.index')->with("failed","No se ha podido modificar el vehículo porque el usuario no existe");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculos $vehiculos)
    {
        // Con este se elimina un registro de la BD
    }
}

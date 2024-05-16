<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class equipoController extends Controller
{

    public function index()
    {
        $equipo = Equipo::all();
        return view('equipos.indexEquipo', compact('equipo'));
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'plantilla' => 'required|integer|min:1',
            'localidad' => 'required|string|max:255',
            'escudo' => 'required|string|max:255',
        ]);

        // Crear un nuevo equipo usando el método `create` del modelo
        Equipo::create($request->all());

        // Redireccionar a la vista de listado de equipos
        return redirect()->route('equipos.index');
    }

    public function show($id)
    {
       //
    }

    public function edit($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('equipos.editEquipo', compact('equipo'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'plantilla' => 'required|integer|min:1',
            'localidad' => 'required|string|max:255',
            'escudo' => 'required|string|max:255',
        ]);

        // Buscar el equipo por su ID
        $equipo = Equipo::findOrFail($id);

        // Actualizar los datos del equipo
        $equipo->update($request->all());

        // Redireccionar a la vista de listado de equipos
        return redirect()->route('equipos.index');
    }

    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);

        $equipo->delete();

        return redirect()->route('equipos.index');
    }
}

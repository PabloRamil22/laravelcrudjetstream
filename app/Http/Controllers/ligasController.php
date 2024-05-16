<?php

namespace App\Http\Controllers;

use App\Models\ligas;
use Illuminate\Http\Request;

class LigasController extends Controller
{
    public function index()
    {
        $ligas = ligas::all();
        return view('ligas.indexLigas', compact('ligas'));
    }

    public function create()
    {
        return view('ligas.createLigas');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:1',
            'logo' => 'required|string|max:255',
        ]);

        // Crear una nueva liga usando el método `create` del modelo
        ligas::create($request->all());

        // Redireccionar a la vista de listado de ligas
        return redirect()->route('ligas.index');
    }

    public function show($id)
    {
       //
    }

    public function edit($id)
    {
        $liga = ligas::findOrFail($id);
        return view('ligas.editLigas', compact('liga'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:1',
            'logo' => 'required|string|max:255',
        ]);

        // Buscar la liga por su ID
        $liga = ligas::findOrFail($id);

        // Actualizar los datos de la liga
        $liga->update($request->all());

        // Redireccionar a la vista de listado de ligas
        return redirect()->route('ligas.index');
    }

    public function destroy($id)
    {
        $liga = ligas::findOrFail($id);

        $liga->delete();

        return redirect()->route('ligas.indexLigas');
    }
}

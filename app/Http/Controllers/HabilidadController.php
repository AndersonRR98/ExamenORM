<?php

namespace App\Http\Controllers;

use App\Models\Habilidades;
use App\Http\Requests\StoreHabilidadesRequest;
use App\Http\Requests\UpdateHabilidadesRequest;
use Illuminate\Http\Request;


class HabilidadController extends Controller
{
     // LISTAR todos los egresados (JSON)
    public function index()
    {
        return response()->json(Habilidades::all());
    }

    // FORMULARIO para crear un nuevo user
    public function create()
    {
        return view('StoreHabilidad'); // resources/views/Store.blade.php
    }

    // GUARDAR nuevo user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'descripcion' => 'required|string|max:255',
            
        ]);

        $habilidades = Habilidades::create($validated);

        return response()->json(['message' => 'Habilidad creada correctamente', 'habilidades' => $habilidades]);
    }

    // MOSTRAR un user específico
    public function show(Habilidades $habilidades)
    {
        return response()->json($habilidades);
    }

    // FORMULARIO para editar un usuario
    public function edit(Habilidades $habilidades)
    {
        return view('UpdateHabilidad', compact('habilidades')); // resources/views/Update.blade.php
    }

    // ACTUALIZAR usuario 
    public function update(Request $request, Habilidades $habilidades)
    {
        $validated = $request->validate([
                        'descripcion' => 'required|string|max:255',

        ]);

        $habilidades->update($validated);

        return response()->json(['message' => 'habilidad creada correctamente', 'habilidades' => $habilidades]);
    }

    // ELIMINAR usuario
    public function destroy(Habilidades $habilidades)
    {
        $habilidades->delete();

        return response()->json(['message' => 'Habilidad eliminado correctamente']);
    }
}

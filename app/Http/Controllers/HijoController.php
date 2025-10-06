<?php

namespace App\Http\Controllers;

use App\Models\Hijo;
use App\Http\Requests\StoreHijoRequest;
use App\Http\Requests\UpdateHijoRequest;
use Illuminate\Http\Request;


class HijoController extends Controller
{
    // LISTAR todos los egresados (JSON)
    public function index()
    {
        return response()->json(Hijo::all());
    }

    public function create()
    {
        return view('StoreHijo'); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'empleado_id' => 'required|exists:empleados,id'
        ]);

        $hijos = Hijo::create($validated);

        return response()->json(['message' => 'hijo creado correctamente', 'hijos' => $hijos]);
    }

    public function show(Hijo $hijos)
    {
        return response()->json($hijos);
    }

    public function edit(Hijo $hijos)
    {
        return view('UpdateHijo', compact('hijos')); 
    }

    public function update(Request $request, Hijo $hijos)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'empleado_id' => 'required|exists:empleados,id'
        ]);

        $hijos->update($validated);

        return response()->json(['message' => 'hijo actualizado correctamente', 'hijo' => $hijos]);
    }

    // ELIMINAR usuario
    public function destroy(Hijo $hijos)
    {
        $hijos->delete();

        return response()->json(['message' => 'Hijo eliminado correctamente']);
    }
}

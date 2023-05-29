<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perro;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class PerroController extends Controller
{
    // Mostrar todos los perros
    public function index()
    {
        $perros = Perro::all();
        return response()->json($perros);
    }

    // Mostrar un perro específico
    public function show($id)
    {
        try {
            $perro = Perro::findOrFail($id);
            return response()->json($perro);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Perro no encontrado'], 404);
        }
    }

    // Crear un nuevo perro
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'breed' => 'required',
                'sex' => 'required',
                'age' => 'required|integer',
                'description' => 'required',
                'photo' => 'required',
                'idUser' => 'nullable|integer',
            ]);

            $perro = Perro::create($request->all());
            return response()->json($perro, 201);
        } catch (ValidationException $exception) {
            return response()->json(['error' => $exception->errors()], 422);
        }
    }

    // Actualizar un perro existente
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'breed' => 'required',
                'sex' => 'required',
                'age' => 'required|integer',
                'description' => 'required',
                'photo' => 'required',
                'idUser' => 'nullable|integer',
            ]);

            $perro = Perro::findOrFail($id);
            $perro->update($request->all());
            return response()->json($perro, 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Perro no encontrado'], 404);
        } catch (ValidationException $exception) {
            return response()->json(['error' => $exception->errors()], 422);
        }
    }

    // Eliminar un perro
    public function destroy($id)
    {
        try {
            $perro = Perro::findOrFail($id);
            $perro->delete();
            return response()->json(null, 204);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Perro no encontrado'], 404);
        }
    }
}
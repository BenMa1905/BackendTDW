<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interaccion;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class InteraccionController extends Controller
{
    // Mostrar todas las interacciones
    public function index()
    {
        $interacciones = Interaccion::all();
        return response()->json($interacciones);
    }

    // Mostrar una interacción específica basada en las IDs proporcionadas en la URL
    public function show($id1, $id2)
    {
        try {
            $interaccion = Interaccion::where('idInterested', $id1)
                ->where('idCandidate', $id2)
                ->orWhere('idInterested', $id2)
                ->where('idCandidate', $id1)
                ->firstOrFail();

            return response()->json($interaccion);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Interacción no encontrada'], 404);
        }
    }

    // Crear una nueva interacción basada en las IDs proporcionadas en la URL
    public function store(Request $request, $id1, $id2)
    {
        try {
            $request->validate([
                'type' => 'required|in:A,R',
            ]);

            $interaccion = new Interaccion();
            $interaccion->idInterested = $id1;
            $interaccion->idCandidate = $id2;
            $interaccion->type = $request->input('type');
            $interaccion->save();

            return response()->json($interaccion, 201);
        } catch (ValidationException $exception) {
            return response()->json(['error' => $exception->errors()], 422);
        }
    }

    // Actualizar una interacción existente basada en las IDs proporcionadas en la URL
    public function update(Request $request, $id1, $id2)
    {
        try {
            $request->validate([
                'type' => 'required|in:A,R',
            ]);

            $interaccion = Interaccion::where('idInterested', $id1)
                ->where('idCandidate', $id2)
                ->orWhere('idInterested', $id2)
                ->where('idCandidate', $id1)
                ->firstOrFail();

            $interaccion->type = $request->input('type');
            $interaccion->save();

            return response()->json($interaccion, 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Interacción no encontrada'], 404);
        } catch (ValidationException $exception) {
            return response()->json(['error' => $exception->errors()], 422);
        }
    }


    // Eliminar una interacción basada en las IDs proporcionadas en la URL
    public function destroy($id1, $id2)
    {
        try {
            $interaccion = Interaccion::where('idInterested', $id1)
                ->where('idCandidate', $id2)
                ->orWhere('idInterested', $id2)
                ->where('idCandidate', $id1)
                ->firstOrFail();

            $interaccion->delete();
            return response()->json(null, 204);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Interacción no encontrada'], 404);
        }
    }
}
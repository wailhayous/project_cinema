<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class SallesController extends Controller
{

     public function index()
    {
        $salles = Salle::all();

        return response()->json($salles);
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_salle' => 'required|integer',
            'status' => 'nullable|in:active,inactive',
        ]);

        $salle = Salle::create([
            'numero_salle' => $request->numero_salle,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Salle created successfully',
            'salle' => $salle
        ], 201);
    }

    public function show(int $id)
    {
        $salle = Salle::findOrFail($id);

        return response()->json($salle);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'numero_salle' => 'required|integer',
            'status' => 'required|in:active,inactive',
        ]);

        $salle = Salle::findOrFail($id);

        $salle->update([
            'numero_salle' => $request->numero_salle,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Salle updated successfully',
            'salle' => $salle
        ]);
    }

    public function destroy(int $id)
    {
        $salle = Salle::findOrFail($id);

        $salle->delete();
        

        return response()->json([
            'message' => 'Salle deleted successfully',
        ]);
    }
}

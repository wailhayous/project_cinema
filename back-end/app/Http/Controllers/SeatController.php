<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;


class SeatController extends Controller
{
     public function index()
    {
        $seats = Seat::all();

        return response()->json($seats);
    }

    public function store(Request $request)
    {
        $request->validate([
            'salle_id' => 'required|exists:salles,id',
            'seat_number' => 'required|string',
            'type' => 'required|in:standard,premium,vip',
        ]);

        $seat = Seat::create([
            'salle_id' => $request->salle_id,
            'seat_number' => $request->seat_number,
            'type' => $request->type,
        ]);

        return response()->json([
            'message' => 'Seat created successfully',
            'seat' => $seat,
        ], 201);
    }

    public function show(int $id)
    {
        $seat = Seat::findOrFail($id);

        return response()->json($seat);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'salle_id' => 'required|exists:salles,id',
            'seat_number' => 'required|string',
            'type' => 'required|in:standard,premium,vip',
        ]);

        $seat = Seat::findOrFail($id);

        $seat->update([
            'salle_id' => $request->salle_id,
            'seat_number' => $request->seat_number,
            'type' => $request->type,
        ]);

        return response()->json([
            'message' => 'Seat updated successfully',
            'seat' => $seat,
        ]);
    }

    public function destroy(int $id)
    {
        $seat = Seat::findOrFail($id);

        $seat->delete();

        return response()->json([
            'message' => 'Seat deleted successfully',
        ]);
    }
}

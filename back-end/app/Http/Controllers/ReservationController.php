<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        if ($user->role === 'admin') {
            return response()->json(
                Reservation::with(['showtime', 'user'])->get()
            );
        }

        return response()->json(
            Reservation::where('user_id', $user->id)->get()
        );
    }

    public function store(Request $request)
    {
        $request->validate([

            'showtime_id' => 'required|exists:showtimes,id',
            'total_price' => 'required|numeric',
            'status' => 'nullable|in:active,inactive',
        ]);

        $reservation = Reservation::create([
            'user_id' => $request->user()->id,
            'showtime_id' => $request->showtime_id,
            'total_price' => $request->total_price,
            'status' => $request->status ?? 'active',
        ]);

        return response()->json([
            'message' => 'Reservation created successfully',
            'reservation' => $reservation,
        ], 201);
    }

    public function show(int $id)
    {

        $reservation = Reservation::with(['showtime', 'user'])->findOrFail($id);

        $user = Auth::user();

        if ($user->role !== 'admin' && $reservation->user_id !== $user->id) {
            return response()->json(
                ['message' => 'mmno3 dokhol hajz maxi dylk'],
                403
            );
        }

        return response()->json($reservation);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([

            'showtime_id' => 'required|exists:showtimes,id',
            'total_price' => 'required|numeric',
            'status' => 'required|in:active,inactive',
        ]);

        $reservation = Reservation::findOrFail($id);

        $reservation->update([
            'user_id' => $request->user()->id,
            'showtime_id' => $request->showtime_id,
            'total_price' => $request->total_price,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Reservation updated successfully',
            'reservation' => $reservation,
        ]);
    }

    public function destroy(int $id)
    {

        $reservation = Reservation::findOrFail($id);
        $reservation->delete();


        return response()->json([
            'message' => 'Reservation deleted successfully',
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ReservationSeat;
use Illuminate\Http\Request;

class ReservationSeatController extends Controller
{
    public function index(){
        $reservationSeats = ReservationSeat::all();
        return response()->json($reservationSeats);
    }

    public function store(Request $request){
        $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'seat_id' => 'required|exists:seats,id',
            'price' => 'required|numeric',
        ]);

        $reservationSeat = ReservationSeat::create([
            'reservation_id' => $request->reservation_id,
            'seat_id' => $request->seat_id,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'Reservation seat created successfully',
            'reservation_seat' => $reservationSeat,
        ],201);
    }

    public function show(int $id){
        $reservationSeat = ReservationSeat::findOrFail($id);
        return response()->json($reservationSeat);
    }

    public function update(Request $request,int $id){
        $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'seat_id' => 'required|exists:seats,id',
            'price' => 'required|numeric',
        ]);

        $reservationSeat = ReservationSeat::findOrFail($id);
        $reservationSeat->update([
            'reservation_id' => $request->reservation_id,
            'seat_id' => $request->seat_id,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'Reservation seat updated successfully',
            'reservation_seat' => $reservationSeat,
        ]);
    }

    public function destroy(int $id){

        $reservationSeat = ReservationSeat::findOrFail($id);
        $reservationSeat->delete();

        return response()->json([
            'message' => 'Reservation seat deleted successfully',
        ]);
    }
}

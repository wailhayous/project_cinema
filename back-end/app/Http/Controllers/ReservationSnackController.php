<?php

namespace App\Http\Controllers;

use App\Models\ReservationSnack;
use Illuminate\Http\Request;

class ReservationSnackController extends Controller
{
    public function index(){
        $reservationSnacks = ReservationSnack::all();
        return response()->json($reservationSnacks);
    }

    public function store(Request $request){
        $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'snack_id' => 'required|exists:snacks,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric',
        ]);

        $reservationSnack = ReservationSnack::create([
            'reservation_id' => $request->reservation_id,
            'snack_id' => $request->snack_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]); 

        return response()->json([
            'message' => 'Reservation snack created succsefully',
            'reservation_snack' => $reservationSnack,
        ],201);

        }
        public function show(int $id){
        $reservationSnack = ReservationSnack::findOrFail($id);
            return response()->json($reservationSnack);
        }
        
        public function update(Request $request ,int $id){
            $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'snack_id' => 'required|exists:snacks,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric',
            ]);

            $reservationSnack = ReservationSnack::findOrFail($id);

            $reservationSnack->update([
                'reservation_id' => $request->reservation_id,
                'snack_id' => $request->snack_id,
                'quantity' => $request->quantity,
                'price' => $request->price,
            ]);

            return response()->json([
                'message' => 'Reservation snack updated successfully',
                'reservation_snack' => $reservationSnack,
            ]);
        }

        public function destroy($id){

            $reservationSnack = ReservationSnack::findOrFail($id);
            $reservationSnack->delete();

            return response()->json([
                'message' => 'Reservation snack deleted successfully',
            ]);
        }
}

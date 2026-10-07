<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(){
        $user = Auth::user();

      if($user->role === 'admin'){
        return response()->json(
            Payment::with(['reservation.user'])->get()
        );
      }

      return response()->json(
        Payment::whereHas('reservation', function ($q) use ($user){
            $q->where('user_id', $user->id);
        })->with(['reservation'])->get()
      );
    }

    public function store(Request $request){

        $validated = $request->validate([
            
            'reservation_id' => 'required|exists:reservations,id',
            'amount'         => 'required|numeric',
            'method'         => 'required|string',
            'status'         => 'required|string',
            'transaction_id' => 'nullable|string',
            'paid_at'        => 'nullable|date',

        ]);

       $reservation = Reservation::findOrFail($validated['reservation_id']);

       $user = Auth::user();

       if($user->role !== 'admin' && $reservation->user_id !== $user->id){

        return response()->json(
            ['message' => 'mmno3 had hajz maxi dyalk'],403
        );

        }

        if($validated['amount'] != $reservation->total_price){
            return response()->json(
                ['message' => 'mablag maxi shuihu'],422
            );
        }

        $validated['status'] = $validated['status'] ?? 'pending';

         if ($validated['status'] === 'paid' && empty($validated['paid_at'])) {
        $validated['paid_at'] = now();
    }
        $payment = Payment::create($validated);

    return response()->json($payment, 201);
       
    }
    

    public function show(int $id){
        $payment = Payment::with(['reservation.user'])->findOrFail($id);

        $user = Auth::user();

        if($user->role !== 'admin' && $payment->reservation->user_id !== $user->id){
            return response()->json(
                ['message' => 'mmno3 had payment maxi dyalk'],403
            );
        }
        return response()->json($payment);
    }
}

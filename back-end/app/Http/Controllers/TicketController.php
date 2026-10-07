<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){

        $tickets = Ticket::all();
        return response()->json($tickets);
    }

    public function store(Request $request){

        $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'ticket_number' => 'required|string|unique:tickets,ticket_number',
            'qr_code' => 'required|string',
            'status' => 'required|in:active,used,cancelled',
        ]);

        $ticket = Ticket::create([
            'reservation_id' => $request->reservation_id,
            'ticket_number' => $request->ticket_number,
            'qr_code' => $request->qr_code,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Ticket created successfully',
            'ticket' => $ticket,
        ],201);
    }

    public function show(int $id){

        $ticket = Ticket::findOrFail($id);
        return response()->json($ticket);
    }

    public function update(Request $request,int $id){

        $request->validate([
            'status' => 'required|in:active,used,cancelled',
        ]);

         $ticket = Ticket::findOrFail($id);

        $ticket->update([
            'status' => $request->status,
        ]);
          return response()->json([
            'message' => 'Ticket updated successfully',
            'ticket' => $ticket,
        ]);
    }
}

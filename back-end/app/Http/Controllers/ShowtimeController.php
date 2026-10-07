<?php

namespace App\Http\Controllers;

use App\Models\Showtime;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    public function index(){
        $showtimes = Showtime::all();

        return response()->json($showtimes);
    }

    public function store(Request $request){
        $request->validate([
            'film_id' => 'required|exists:films,id',
            'salle_id' => 'required|exists:salles,id',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'price' => 'required|numeric',
        ]);

        $showtime = Showtime::create([
            'film_id' => $request->film_id,
            'salle_id' => $request->salle_id,
            'date' => $request->date,
             'start_time' => $request->start_time,
             'end_time' => $request->end_time,
             'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'Showtime created successfully',
            'showtime' => $showtime,
        ],201);

        }
        public function show(int $id){

            $showtime = Showtime::findOrFail($id);

            return response()->json($showtime);
        }

        public function update(Request $request, int $id){
            $request->validate([
                'film_id' => 'required|exists:films,id',
                'salle_id' => 'required|exists:salles,id',
                'date' => 'required|date',
                'start_time' => 'required',
                'end_time' => 'required',
                'price' => 'required|numeric',
            ]); 

            $showtime = Showtime::findOrFail($id);

            $showtime->update([
                'film_id' => $request->film_id,
                'salle_id' => $request->salle_id,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'price' => $request->price,
            ]);
            return response()->json([
                'message' => 'Showtime updated successfully',
                'showtime' => $showtime,
            ]);

            }
            public function destroy(int $id){
                $showtime = Showtime::findOrFail($id);

                $showtime->delete();

                return response()->json([
                    'message' => 'Showtime deleted successfully',
                ]);
            }
}

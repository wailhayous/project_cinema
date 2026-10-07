<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index(){
        $rating = Rating::with(['user', 'film'])->get();

        return response()->json($rating);
    }

    public function store(Request $request){
        $request->validate([
            'film_id' => 'required|exists:films,id',
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $rating = Rating::create([
            'film_id' => $request->film_id,
            'user_id' => $request->user_id,
            'rating' => $request->rating,
        ]);

        return response()->json([
            'message' => 'Rating created successfully',
            'rating' => $rating,
        ],201);
    }
}

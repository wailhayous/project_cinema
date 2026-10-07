<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmsController extends Controller
{


    public function index(){
        $films = Film::all();
        
        return response()->json($films);
    }


    public function store(Request $request){
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'category' => 'required|string',
            'release_date' => 'nullable|date',
            'hours' => 'nullable',
        ]);

        $film = Film::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'category' => $request->category,
            'release_date' => $request->release_date,
            'hours' => $request->hours,
        ]);

        return response()->json([
            'message' => 'Film created successfully',
            'film' => $film
        ], 201);
    }

    public function show($id){

        $film = Film::findOrFail($id);
        return response()->json($film);
    }

    public function update(Request $request, $id){
        $film = Film::findOrFail($id);

        $film->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'category' => $request->category,
            'release_date' => $request->release_date,
            'hours' => $request->hours,
        ]);
        return response()->json($film);
    }

    public function destroy($id){
        $film = Film::findOrFail($id);

        $film->delete();

        return response()->json([
            'message' => 'Film deleted successfully'
        ]);
    }

}

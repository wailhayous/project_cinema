<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index(){
        $actor = Actor::with('films')->get();
        return response()->json($actor);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string',
        ]);

        $actor = Actor::create([
            'name' => $request->name,
            'image' => $request->image,
        ]);

        return response()->json([
            'message' => 'Actore created successfully',
            'actor' => $actor,
        ],201);
    }

    public function update(Request $request,int $id){

    $actor = Actor::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|string',
        ]);

        $actor = Actor::update([
            'name' => $request->name,
            'image' => $request->image,
        ]);

        return response()->json([
            'message' => 'Actor updated successfully',
            'actor' => $actor
        ]);
    }

    public function destroy(int $id){
        $actor = Actor::findOrFail($id);
        $actor->delete();
        return response()->json([
            'message' => 'Actor deleted successfully',
            'actor' => $actor,
        ]);
    }

}

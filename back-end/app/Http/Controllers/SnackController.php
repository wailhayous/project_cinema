<?php

namespace App\Http\Controllers;

use App\Models\Snack;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function index(){
        $snacks = Snack::all();

        return response()->json($snacks);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'price' => 'required|numeric',
            'category' => 'required|string',
        ]);

        $snack = Snack::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'price' => $request->price,
            'category' => $request->category,
        ]);
        return response()->json([
            'message' => 'Snack created successfully',
            'snack' => $snack,
        ],201);
    }

    public function show(int $id){
        $snack = Snack::findOrFail($id);

        return response()->json($snack);
    }

    public function update(Request $request, int $id){
        $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'price' => 'required|numeric',
            'category' => 'required|string',
        ]);
        
        $snack = Snack::findOrFail($id);

        $snack->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'price' => $request->price,
            'category' => $request->category,
        ]);

        return response()->json([
            'message' => 'Snack updated successfully',
            'snack' => $snack,
        ]);
    }

    public function destroy(int $id){
        $snack = Snack::findOrFail($id);
        $snack->delete();
        return response()->json([
            'message' => 'Snack deleted successfully',
        ]);
    }
}

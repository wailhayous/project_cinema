<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $location = Location::all();
        return response()->json($location);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);
        $location = Location::create($request->all());


        return response()->json([
            'message' => 'Location created successfully',
            'location' => $location
        ], 201);
    }

    public function update(Request $request,int $id){
          $location = Location::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $location->update($request->all());

        return response()->json([
            'message' => 'Location updated successfully',
            'location' => $location
        ]);
    }

    public function destroy($id){
        $location = Location::findOrFail($id);
        $location->delete();
        return response()->json([
            'message' => 'Location deleted successfully',
        ]);
    }
}

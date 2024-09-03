<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripScheduleController extends Controller
{
    public function index()
    {
        return Trip::all();
    }

    public function show($id)
    {
        return Trip::findOrFail($id);
    }

    public function store(Request $request)
    {
        $trip = Trip::create($request->all());
        return response()->json($trip, 201);
    }

    public function update(Request $request, $id)
    {
        $trip = Trip::findOrFail($id);
        $trip->update($request->all());
        return response()->json($trip, 200);
    }

    public function destroy($id)
    {
        Trip::destroy($id);
        return response()->json(null, 204);
    }
}

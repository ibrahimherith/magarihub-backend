<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return City::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            "state_id" => "required|exists:states,id",
            "name" => "required|max:255"
        ]);

        $city = City::create($fields);

        return $city;
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        return $city;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $fields = $request->validate([
            "state_id" => "required|exists:states,id",
            "name" => "required|max:255"
        ]);

        $city->update($fields);

        return $city;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();

        return ["message" => "City was deleted!"];
    }
}

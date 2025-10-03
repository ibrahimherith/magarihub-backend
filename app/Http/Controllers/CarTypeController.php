<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use Illuminate\Http\Request;

class CarTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CarType::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            "name" => "required|max:255"
        ]);

        $carType = CarType::create($fields);

        return $carType;
    }

    /**
     * Display the specified resource.
     */
    public function show(CarType $carType)
    {
        return $carType;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarType $carType)
    {
        $fields = $request->validate([
            "name" => "required|max:255"
        ]);

        $carType->update($fields);

        return $carType;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarType $carType)
    {
        $carType->delete();

        return ["message" => "Car type was deleted!"];
    }
}

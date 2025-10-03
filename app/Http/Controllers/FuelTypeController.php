<?php

namespace App\Http\Controllers;

use App\Models\FuelType;
use App\Http\Requests\StoreFuelTypeRequest;
use App\Http\Requests\UpdateFuelTypeRequest;
use Illuminate\Http\Request;

class FuelTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FuelType::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            "name" => "required|max:255"
        ]);

        $fuelType = FuelType::create($fields);

        return $fuelType;
    }

    /**
     * Display the specified resource.
     */
    public function show(FuelType $fuelType)
    {
        return $fuelType;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FuelType $fuelType)
    {
        $fields = $request->validate([
            "name" => "required|max:255"
        ]);

        $fuelType->update($fields);

        return $fuelType;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FuelType $fuelType)
    {
        $fuelType->delete();

        return ["message" => "Fuel type was deleted!"];
    }
}

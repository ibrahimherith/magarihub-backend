<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CarModel::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            "maker_id" => "required|exists:makers,id",
            "name" => "required|max:255"
        ]);

        $carModel = CarModel::create($fields);

        return $carModel;
    }

    /**
     * Display the specified resource.
     */
    public function show(CarModel $carModel)
    {
        return $carModel;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarModel $carModel)
    {
        $fields = $request->validate([
            "maker_id" => "required|exists:makers,id",
            "name" => "required|max:255"
        ]);

        $carModel->update($fields);

        return $carModel;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarModel $carModel)
    {
        $carModel->delete();

        return ["message" => "Model was deleted!"];
    }
}

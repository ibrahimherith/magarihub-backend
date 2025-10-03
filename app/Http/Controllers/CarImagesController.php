<?php

namespace App\Http\Controllers;

use App\Models\CarImages;
use App\Http\Requests\StoreCarImagesRequest;
use App\Http\Requests\UpdateCarImagesRequest;

class CarImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarImagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CarImages $carImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarImagesRequest $request, CarImages $carImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarImages $carImages)
    {
        //
    }
}

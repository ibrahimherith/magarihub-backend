<?php

namespace App\Http\Controllers;

use App\Models\FavouriteCar;
use App\Http\Requests\StoreFavouriteCarRequest;
use App\Http\Requests\UpdateFavouriteCarRequest;

class FavouriteCarController extends Controller
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
    public function store(StoreFavouriteCarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FavouriteCar $favouriteCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavouriteCarRequest $request, FavouriteCar $favouriteCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FavouriteCar $favouriteCar)
    {
        //
    }
}

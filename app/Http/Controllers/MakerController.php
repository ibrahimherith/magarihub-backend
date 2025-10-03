<?php

namespace App\Http\Controllers;

use App\Models\Maker;
use App\Http\Requests\StoreMakerRequest;
use App\Http\Requests\UpdateMakerRequest;
use Illuminate\Http\Request;

class MakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Maker::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            "name" => "required|max:255"
        ]);

        $maker = Maker::create($fields);

        return $maker;
    }

    /**
     * Display the specified resource.
     */
    public function show(Maker $maker)
    {
        return $maker;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maker $maker)
    {
        $fields = $request->validate([
            "name" => "required|max:255"
        ]);

        $maker->update($fields);

        return $maker;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maker $maker)
    {
        $maker->delete();

        return ["message" => "Maker was deleted!"];
    }
}

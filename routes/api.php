<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CarFeatureController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\FuelTypeController;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\StateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource("car-types", CarTypeController::class);
Route::apiResource("fuel-types", FuelTypeController::class);
Route::apiResource("cars", CarController::class);
Route::apiResource("cars-features", CarFeatureController::class);
Route::apiResource("favourite-cars", CarFeatureController::class);

Route::apiResource("states", StateController::class);
Route::apiResource("cities", CityController::class);

Route::apiResource("makers", MakerController::class);
Route::apiResource("models", CarModelController::class);

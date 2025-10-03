<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteCar extends Model
{
    /** @use HasFactory<\Database\Factories\FavouriteCarFactory> */
    use HasFactory;

    protected $fillable = [
        "car_id",
        "user_id"
    ];
}

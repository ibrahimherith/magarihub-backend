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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}

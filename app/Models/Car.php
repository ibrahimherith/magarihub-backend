<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFactory> */
    use HasFactory;

    protected $fillable = [
        "maker_id",
        "model_id",
        "car_type_id",
        "fuel_type_id",
        "user_id",
        "city_id",
        "year",
        "price",
        "vin",
        "mileage",
        "address",
        "phone",
        "description",
        "published_at"
    ];
}

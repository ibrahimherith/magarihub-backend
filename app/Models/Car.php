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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function favouriteCars()
    {
        return $this->hasMany(FavouriteCar::class);
    }

    public function carType()
    {
        return $this->belongsTo(CarType::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function maker()
    {
        return $this->belongsTo(Maker::class);
    }

    public function model()
    {
        return $this->belongsTo(CarModel::class);
    }

    public function fuelType()
    {
        return $this->belongsTo(FuelType::class);
    }

    public function carImages()
    {
        return $this->hasMany(CarImages::class);
    }

    public function carFeature()
    {
        return $this->belongsTo(CarFeature::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImages extends Model
{
    /** @use HasFactory<\Database\Factories\CarImagesFactory> */
    use HasFactory;

    protected $fillable = [
        "car_id",
        "image_path",
        "position"
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId("car_id")->constrained("cars");
            $table->boolean("abs");
            $table->boolean("power_windows");
            $table->boolean("power_door_locks");
            $table->boolean("cruise_control");
            $table->boolean("bluetooth_connectivity");
            $table->boolean("remote_start");
            $table->boolean("gps_navigation");
            $table->boolean("heater_seats");
            $table->boolean("climate_control");
            $table->boolean("rear_parking_sensors");
            $table->boolean("leather_seats");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_features');
    }
};

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
        Schema::create('units', function (Blueprint $table) {

            $table->id();
            $table->string('unit_number', 16);
            $table->string('building_number', 16);
            $table->string('street_name', 32);
            $table->string('city', 32);
            $table->string('type', 32);
            $table->string('price', 64);
            $table->string('square_feet', 64);
            $table->string('bedrooms', 32);
            $table->string('bathrooms', 32);
            $table->boolean('garage')->default(false);
            $table->boolean('pool')->default(false);
            $table->mediumText('description')->nullable();
            $table->enum('status', ['0', '1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

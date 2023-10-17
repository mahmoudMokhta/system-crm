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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('address', 64);
            $table->string('contact_num_one', '100');
            $table->string('contact_num_two', '100')->nullable();
            $table->string('email', 32);
            $table->enum('status', ['0', '1'])->default('0');
            $table->foreignId('unit_id')->nullable();
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->mediumText('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

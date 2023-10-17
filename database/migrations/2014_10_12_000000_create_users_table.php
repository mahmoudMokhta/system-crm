<?php

use Carbon\Carbon;
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
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('name', 64);
            $table->string('email', 32)->unique();
            $table->string('address', 255);
            $table->string('city', 255);
            $table->string('contact_num_one', 50);
            $table->string('contact_num_two', 50)->nullable();
            $table->string('title', 64);
            $table->string('project', 64);
            $table->date('hiring_date')->default(Carbon::now()->format('Y-m-d'));
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('role', 64);
            $table->string('profile_picture');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

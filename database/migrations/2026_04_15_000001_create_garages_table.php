<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('garages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('owner_name')->nullable();
            $table->string('phone');
            $table->string('whatsapp')->nullable();
            $table->string('location');
            $table->string('emirate'); // Dubai, Abu Dhabi, Sharjah, Ajman, etc.
            $table->string('license_number')->nullable();
            $table->string('logo_url')->nullable();
            $table->boolean('verified')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('garages');
    }
};

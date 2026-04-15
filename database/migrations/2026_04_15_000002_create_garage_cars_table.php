<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('garage_cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('garage_id')->constrained('garages')->onDelete('cascade');
            $table->string('slug')->unique();
            $table->string('make'); // Toyota, Honda, etc.
            $table->string('model'); // Camry, Civic, etc.
            $table->integer('year');
            $table->string('variant')->nullable(); // LE, Sport, etc.
            $table->string('vin', 17)->nullable();
            $table->integer('mileage_km')->nullable();
            $table->integer('price_aed');
            $table->boolean('price_negotiable')->default(true);
            $table->string('condition'); // Excellent, Good, Fair
            $table->string('color')->nullable();
            $table->string('fuel_type')->nullable(); // Petrol, Diesel, Hybrid, Electric
            $table->string('transmission')->nullable(); // Automatic, Manual
            $table->string('body_type')->nullable(); // Sedan, SUV, Pickup, Van
            $table->text('description')->nullable();
            $table->json('features')->nullable(); // Array: ["Sunroof","Leather Seats"]
            $table->json('photos')->nullable(); // Array of image URLs
            $table->string('emirate');
            $table->string('location_area')->nullable();
            $table->boolean('history_clean')->default(false);
            $table->string('history_report_url')->nullable();
            $table->string('status')->default('active'); // active, sold, pending
            $table->integer('views')->default(0);
            $table->timestamp('featured_until')->nullable();
            $table->timestamps();

            $table->index(['status', 'emirate']);
            $table->index(['make', 'model']);
            $table->index('price_aed');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('garage_cars');
    }
};

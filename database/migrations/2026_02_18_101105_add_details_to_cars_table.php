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
        Schema::table('cars', function (Blueprint $table) {
            if (!Schema::hasColumn('cars', 'mileage')) {
                $table->string('mileage')->nullable()->after('car_image_url');
            }
            if (!Schema::hasColumn('cars', 'location')) {
                $table->string('location')->nullable()->after('mileage');
            }
            if (!Schema::hasColumn('cars', 'damage')) {
                $table->string('damage')->nullable()->after('location');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn(['mileage', 'location', 'damage']);
        });
    }
};

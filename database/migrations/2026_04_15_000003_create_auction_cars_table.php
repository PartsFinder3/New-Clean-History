<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('auction_cars', function (Blueprint $table) {
            $table->id();
            $table->string('lot')->nullable();
            $table->string('vin', 17)->nullable()->index();
            $table->string('seller')->nullable();
            $table->string('sale_document')->nullable();
            $table->string('approved')->nullable();
            $table->string('loss')->nullable();
            $table->string('primary_damage')->nullable();
            $table->string('secondary_damage')->nullable();
            $table->string('odometer')->nullable();
            $table->string('start_code')->nullable();
            $table->string('key')->nullable();
            $table->string('acv_erc')->nullable();
            $table->string('body_style')->nullable();
            $table->string('exterior_color')->nullable();
            $table->string('engine')->nullable();
            $table->string('transmission')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('drive_type')->nullable();
            $table->string('model')->nullable();
            $table->string('series')->nullable();
            $table->string('cylinders')->nullable();
            $table->string('restraint_system')->nullable();
            $table->string('drive_line_type')->nullable();
            $table->text('photos')->nullable(); // JSON array of photo URLs
            $table->string('status')->default('active'); // active, sold, pending
            $table->boolean('history_clean')->default(false);
            $table->timestamp('featured_until')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('auction_cars');
    }
};

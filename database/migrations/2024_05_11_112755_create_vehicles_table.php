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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vin')->unique();
            $table->foreignId('brand_id')->constrained('brands');
            $table->foreignId('model_id')->constrained('models');
            $table->string('bodystyle')->nullable();
            $table->string('color')->nullable();
            $table->string('engine_type')->nullable();
            $table->string('transmission_type')->nullable();
            $table->foreignId('plant_id')->nullable()->constrained('manufacturings');
            $table->decimal('price', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};

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
        Schema::create('spaces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image'); // Assuming image is a file path or URL
            $table->longText('description');
            $table->longText('benefit')->nullable();
            $table->string('no_of_persons');
            $table->string('price_half_day'); // Change precision and scale as needed
            $table->string('price_daily'); // Change precision and scale as needed
            $table->string('price_weekly'); // Change precision and scale as needed
            $table->string('price_monthly'); // Change precision and scale as needed
            $table->string('price_annually'); // Change precision and scale as needed
            $table->integer('min_no_of_days')->nullable();
            $table->integer('max_no_of_days')->nullable();
            $table->boolean('isAvailable');
            $table->boolean('isActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spaces');
    }
};

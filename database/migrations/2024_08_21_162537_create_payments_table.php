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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id'); // Foreign key to bookings table
            $table->string('amount'); // Payment amount
            $table->string('payment_method'); // E.g., credit card, PayPal
            $table->string('transaction_id')->nullable(); // Transaction ID from payment gateway
            $table->boolean('is_successful')->default(false); // Payment status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('guest_id');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('nguests');
            $table->decimal('total_cost', 10, 2);
            $table->enum('status', ['confirmed', 'pending', 'cancelled']);
            $table->enum('payment_method', ['credit_card', 'paypal', 'bank_transfer', 'cash']);
            $table->timestamps();
            
            $table->foreign('property_id')->references('property_id')->on('properties')->onDelete('cascade');
            $table->foreign('guest_id')->references('guest_id')->on('guests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

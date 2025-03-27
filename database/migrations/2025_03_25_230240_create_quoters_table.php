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
        Schema::create('quoters', function (Blueprint $table) {
            $table->id();
            $table->string('client');
            $table->string('nit')->unique();
            $table->string('delivery_address')->nullable();
            $table->string('purchase_order')->nullable();
            $table->string('business_contact')->nullable();
            $table->string('phone_contact')->nullable();
            $table->string('type_order')->nullable();
            $table->text('invoice_general_data')->nullable();
            $table->text('order_terms')->nullable();
            $table->text('product_general_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quoters');
    }
};

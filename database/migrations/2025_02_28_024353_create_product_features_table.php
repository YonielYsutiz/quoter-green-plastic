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
        Schema::create('product_features', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('AL')->nullable();
            $table->string('R')->nullable();
            $table->string('H')->nullable();
            $table->string('FL')->nullable();
            $table->string('4E')->nullable();
            $table->string('CH')->nullable();
            $table->string('DT')->nullable();
            $table->string('TP')->nullable();
            $table->string('RMT')->nullable();
            $table->string('EX')->nullable();
            $table->string('T')->nullable();
            $table->string('M')->nullable();
            $table->string('MC')->nullable();
            $table->string('MI')->nullable();
            $table->string('HD')->nullable();
            $table->string('A')->nullable();
            $table->string('upper_profile_amount')->nullable(); # perfil superior cantidad
            $table->string('upper_profile_reference_id')->nullable(); # perfil superior referencia ID
            $table->string('lower_profile_amount')->nullable(); # perfil inferior cantidad
            $table->string('lower_profile_reference')->nullable(); # perfil inferior referencia ID
            $table->string('sleeping_quantity')->nullable(); # durmiente cantidad
            $table->string('sleeping_reference_id')->nullable(); # durmiente ID
            $table->string('number_of_screws')->nullable(); # numero de tornillos
            $table->string('screws_type_id')->nullable(); # tipo de tornillos ID
            $table->string('nut_quantity')->nullable(); # cantidad de tuercas
            $table->string('nut_type_id')->nullable(); # tipo de tuerca id
            $table->string('washer_quantity')->nullable(); # cantidad de arandelas
            $table->string('washer_type_id')->nullable(); # tipo de arandelas id
            $table->string('entries_quantity')->nullable(); # cantidad de entradas
            $table->string('resistance_static')->nullable(); # resistencia estatica KG
            $table->string('resistance_dynamic')->nullable(); # resistencia dinamica KG
            $table->string('resistance_vacuum')->nullable(); # resistencia al vacio KG
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_features');
    }
};

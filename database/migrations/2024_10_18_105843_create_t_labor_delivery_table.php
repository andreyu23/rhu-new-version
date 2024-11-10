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
        Schema::create('t_labor_delivery', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'lad_date_delivery');
            $table->string(column: 'lad_type_delivery');
            $table->string(column: 'lad_place_delivery');
            $table->string(column: 'lad_birth_delivery');
            $table->string(column: 'lad_birth_weight');
            $table->string(column: 'lad_live_birth');
            $table->string(column: 'lad_gender');
            $table->string(column: 'lad_healthy');
            $table->string(column: 'lad_post_partum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_labor_delivery');
    }
};

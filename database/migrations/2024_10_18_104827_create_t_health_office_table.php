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
        Schema::create('t_health_office', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'ho_barangay');
            $table->string(column: 'ho_municipality');
            $table->string(column: 'ho_province');
            $table->string(column: 'ho_ref_unit');
            $table->string(column: 'ho_mw_name');
            $table->string(column: 'ho_duty_station');
            $table->string(column: 'ho_bemoc');
            $table->string(column: 'ho_bemoc_add');
            $table->string(column: 'ho_cemoc');
            $table->string(column: 'ho_cemoc_add');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_healthoffice');
    }
};

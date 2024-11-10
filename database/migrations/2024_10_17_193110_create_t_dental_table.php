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
        Schema::create('t_dental', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'dental_check');
            $table->string(column: 'dental_caries');
            $table->string(column: 'dental_others');
            $table->string(column: 'dental_malnourish');
            $table->string(column: 'dental_other_problem');
            $table->string(column: 'dental_action');
            $table->string(column: 'dental_refer');
            $table->string(column: 'dental_food');
            $table->string(column: 'dental_days');
            $table->string(column: 'dental_wt');
            $table->string(column: 'dental_remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_dental');
    }
};

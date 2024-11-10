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
        Schema::create('t_prenatal', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'prenatal_trimester');
            $table->string(column: 'prenatal_date_of_visit');
            $table->string(column: 'prenatal_age_in_months');
            $table->string(column: 'prenatal_AOG');
            $table->string(column: 'prenatal_blood_pressure');
            $table->string(column: 'prenatal_weight');
            $table->string(column: 'prenatal_presentation');
            $table->string(column: 'prenatal_FHB');
            $table->string(column: 'prenatal_fundal_height');
            $table->string(column: 'prenatal_fever');
            $table->string(column: 'prenatal_edema');
            $table->string(column: 'prenatal_vaginal_bleeding');
            $table->string(column: 'prenatal_pallor');
            $table->string(column: 'prenatal_lab_test_res');
            $table->string(column: 'prenatal_service_given');
            $table->string(column: 'prenatal_sulfate_folic');
            $table->string(column: 'prenatal_calcium_carbon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_prenatal');
    }
};

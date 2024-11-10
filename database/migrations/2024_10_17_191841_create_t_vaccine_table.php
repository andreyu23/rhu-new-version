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
        Schema::create('t_vaccine', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'covid_vaccine');
            $table->string(column: 'covid_dose');
            $table->string(column: 'covid_booster');
            $table->string(column: 'covid_add_booster');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_vaccine');
    }
};

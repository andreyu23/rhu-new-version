<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrenatalModel extends Model
{
    use HasFactory;

    protected $table = "t_prenatal";

    protected $fillable = [
        'prenatal_trimester',
        'prenatal_date_of_visit',
        'prenatal_age_in_months',
        'prenatal_AOG',
        'prenatal_blood_pressure',
        'prenatal_weight',
        'prenatal_presentation',
        'prenatal_FHB',
        'prenatal_fundal_height',
        'prenatal_fever',
        'prenatal_edema',
        'prenatal_vaginal_bleeding',
        'prenatal_pallor',
        'prenatal_lab_test_res',
        'prenatal_service_given',
        'prenatal_sulfate_folic',
        'prenatal_calcium_carbon',


    ];
}

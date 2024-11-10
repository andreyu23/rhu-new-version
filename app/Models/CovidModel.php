<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidModel extends Model
{
    use HasFactory;

    protected $table =  "t_vaccine";

    protected $fillable = [
        'covid_vaccine',
        'covid_dose',
        'covid_booster',
        'covid_add_booster',
    ];
}

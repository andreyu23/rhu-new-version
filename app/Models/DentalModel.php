<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentalModel extends Model
{
    use HasFactory;

    protected $table = "t_dental";

    protected $fillable = [
        'dental_check',
        'dental_caries',
        'dental_others',
        'dental_malnourish',
        'dental_other_problem',
        'dental_action',
        'dental_refer',
        'dental_food',
        'dental_days',
        'dental_wt',
        'dental_remarks',
    ];
}

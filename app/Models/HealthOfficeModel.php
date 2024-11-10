<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthOfficeModel extends Model
{
    use HasFactory;

    protected $table = "t_health_office";

    protected $fillable = [
        'ho_barangay',
        'ho_municipality',
        'ho_province',
        'ho_ref_unit',
        'ho_mw_name',
        'ho_duty_station',
        'ho_bemoc',
        'ho_bemoc_add',
        'ho_cemoc',
        'ho_cemoc_add',
    ];
}

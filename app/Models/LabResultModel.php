<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabResultModel extends Model
{
    use HasFactory;

    protected $table =  "t_labresult";

    protected $fillable = [
        'lab_cbc',
        'lab_urine',
        'lab_ultrasound',
        'lab_others',
    ];
}


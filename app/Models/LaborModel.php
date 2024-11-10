<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaborModel extends Model
{
    use HasFactory;

    protected $table = "t_labor_delivery";

    protected $fillable = [
        'lad_date_delivery',
        'lad_type_delivery',
        'lad_place_delivery',
        'lad_birth_delivery',
        'lad_birth_weight',
        'lad_live_birth',
        'lad_gender',
        'lad_healthy',
        'lad_post_partum',
    ];
}

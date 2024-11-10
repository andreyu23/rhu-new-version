<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyModel extends Model
{
    use HasFactory;

    protected $table ="t_family_planning";


    protected $fillable = [
        'family_date',
        'family_method',
        'family_remarks',
    ];
}

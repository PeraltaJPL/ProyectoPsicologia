<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'career',
        'date',
        'location',
        'visual_score',
        'auditory_score',
        'kinesthetic_score',
    ];
}

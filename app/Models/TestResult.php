<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    use HasFactory;

    protected $table = 'test_results';
    protected $primaryKey = 'resultId';
    public $timestamps = false;

    protected $fillable = [
        'patientId',
        'testId',
        'result',
        'testDate'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patientId');
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'testId');
    }
}

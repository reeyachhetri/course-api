<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'title',
        'duration',
        'earliest_intake',
        'deadline',
        'tuition',
        'application_fee',
        'commission',
        'description',
        'admission_requirements',

    ];
}

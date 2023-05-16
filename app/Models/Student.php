<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'contact_number',
        'nationality',
        'gender',
        'marital_status',
        'date_of_birth',
        'country_of_birth',
        'preferred_contact_details',
        'native_language',
        'emergency_contact_full_name',
        'emergency_contact_relation',
        'emergency_contact_number',
        'permanent_state',
        'permanent_district',
        'permanent_postal_code',
        'permanent_street',
        'temporary_state',
        'temporary_district',
        'temporary_postal_code',
        'temporary_street',
        'guardian_first_name',
        'guardian_middle_name',
        'guardian_last_name',
        'guardian_email_address',
        'guardian_contact_number',
        'guardian_relation',
        'guardian_highest_education_level',
        'guardian_estimated_annual_household_number',
        'highest_education_level',
        'high_school_name',
        'high_school_address',
        'high_school_start_date',
        'high_school_end_date',
        'college_name',
        'college_address',
        'college_start_date',
        'college_end_date',
        'test_scores',
        'employer_name',
        'employer_address',
        'job_title',
        'employment_status',
        'employment_start',
        'employment_end',
        'visa_details',
        'lead_status',
        'applying_for',
        'interested_country',
        'live_course',
        'shortlisted_courses',
    ];
}
<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            //Basic Information
            'First Name'=>$this->first_name,
            'Middle Name'=>$this->middle_name,

        'Last Name'=>$this->last_name,
        'Email Address'=>$this->email,
        'Contact Number'=>$this->contact_number,
        'Nationality'=>$this->nationality,
        'Gender'=>$this->gender,
        'Marital Status'=>$this->martial_status,
        'Date of Birth'=>$this->date_of_birth,
        'Country of Birth'=>$this->country_of_birth,
        'Preferred Contact Details'=>$this->preferred_contact_details,
        'Native Language'=>$this->native_language,

        //Emergency Contact
        'Emergency Contact Full Name'=>$this->emergency_contact_full_name,
        'Emergency Contact Relation'=>$this->emergency_contact_relation,
        'Emergency Contact Number'=>$this->emergency_contact_number,

        //Permanent Address
        'Permanent State'=>$this->permanent_state,
        'Permanent District'=>$this->permanent_district,
        'Permanent Postal Code'=>$this->permanent_postal_code,
        'Permanent Street'=>$this->permanent_street,

        //Temporary Address
        'Temporary State'=>$this->temporary_state,
        'Temporary District'=>$this->temporary_district,
        'Temporary Postal Code'=>$this->temporary_postal_code,
        'Temporary Street'=>$this->temporary_street,

        //Guardian's Information
        'Guardian First Name'=>$this->guardian_first_name,
        'Guardian Middle Name'=>$this->guardian_middle_name,
        'Guardian Last Name'=>$this->guardian_last_name,
        'Guardian Email Address'=>$this->guardian_email_address,
        'Guardian Contact Number'=>$this->guardian_contact_number,
        'Guardian Relation'=>$this->guardian_relation,
        'Guardian Highest Education Level'=>$this->guardian_highest_education_level,
        'Guardian Estimated Annual Household Number'=>$this->guardian_estimated_annual_household_number,

        //Student Education Information
        'Highest Education Level'=>$this->highest_education_level,
        'High School Name'=>$this->high_school_name,
        'High School Address'=>$this->high_school_address,
        'High School Start Date'=>$this->high_school_start_date,
        'High School End Date'=>$this->high_school_end_date,
        'College Name'=>$this->college_name,
        'College Address'=>$this->college_address,
        'College Start Date'=>$this->college_start_date,
        'College End Date'=>$this->college_end_date,

        //English And Standardized Test Scores
        'Test Scores'=>$this->test_scores,

        //Employment
        'Employer Name'=>$this->employer_name,
        'Employer Address'=>$this->employer_address,
        'Job title'=>$this->job_title,
        'Employment Status'=>$this->employment_status,
        'Employment Start'=>$this->employment_start,
        'Employment End'=>$this->employment_end,

        ////Citizen and Visa Information
        'Visa Details'=>$this->visa_details,
        ];
    }
}
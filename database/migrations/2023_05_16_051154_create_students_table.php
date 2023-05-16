<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            //Basic Information
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('contact_number');
            $table->string('nationality');
            $table->enum('gender',['Male','Female','Other']);
            $table->enum('martial_status',['Single','Married','Divorced']);
            $table->date('date_of_birth');
            $table->string('country_of_birth');
            $table->string('preferred_contact_details');
            $table->string('native_language');

            //Emergency Contact
            $table->string('emergency_contact_full_name');
            $table->string('emergency_contact_relation');
            $table->string('emergency_contact_number');

            //Permanent Address
            $table->string('permanent_state');
            $table->string('permanent_district');
            $table->string('permanent_postal_code');
            $table->string('permanent_street');

            //Temporary Address
            $table->string('temporary_state');
            $table->string('temporary_district');
            $table->string('temporary_postal_code');
            $table->string('temporary_street');

            //Parent's Information
            $table->string('guardian_first_name');
            $table->string('guardian_middle_name');
            $table->string('guardian_last_name');
            $table->string('guardian_email_address');
            $table->string('guardian_contact_number');
            $table->string('guardian_relation');
            $table->string('guardian_highest_education_level');
            $table->string('guardian_estimated_annual_household_number');

            //Student Education Information',
            $table->string('highest_education_level');
            $table->string('high_school_name');
            $table->string('high_school_address');
            $table->date('high_school_start_date');
            $table->date('high_school_end_date');
            $table->string('college_name');
            $table->string('college_address');
            $table->date('college_start_date');
            $table->date('college_end_date');

            //English And Standardized Test Scores
            $table->json('test_scores');

            //Employment
            $table->string('employer_name');
            $table->string('employer_address');
            $table->string('job_title');
            $table->string('employment_status');
            $table->date('employment_start');
            $table->date('employment_end');

            //Citizen and Visa Information
            $table->json('visa_details');

            //Lead Management
            $table->string('lead_status');
            $table->string('applying_for');
            $table->string('interested_country');
            $table->string('live_course');
            $table->string('shortlisted_courses');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
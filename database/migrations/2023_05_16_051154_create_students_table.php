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
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email');
            $table->string('contact_number');
            $table->string('nationality');
            $table->enum('gender',['Male','Female','Other']);
            $table->enum('martial_status',['Single','Married']);
            $table->date('date_of_birth');
            $table->string('country_of_birth')->nullable();
            $table->string('preferred_contact_details')->nullable();
            $table->string('native_language')->nullable();

            //Emergency Contact
            $table->string('emergency_contact_full_name')->nullable();
            $table->string('emergency_contact_relation')->nullable();
            $table->string('emergency_contact_number')->nullable();

            //Permanent Address
            $table->string('permanent_state')->nullable();
            $table->string('permanent_district')->nullable();
            $table->string('permanent_postal_code')->nullable();
            $table->string('permanent_street')->nullable();

            //Temporary Address
            $table->string('temporary_state')->nullable();
            $table->string('temporary_district')->nullable();
            $table->string('temporary_postal_code')->nullable();
            $table->string('temporary_street')->nullable();

            //Parent's Information
            $table->string('guardian_first_name')->nullable();
            $table->string('guardian_middle_name')->nullable();
            $table->string('guardian_last_name')->nullable();
            $table->string('guardian_email_address')->nullable();
            $table->string('guardian_contact_number')->nullable();
            $table->string('guardian_relation')->nullable();
            $table->string('guardian_highest_education_level')->nullable();
            $table->string('guardian_estimated_annual_household_number')->nullable();

            //Student Education Information',
            $table->string('highest_education_level')->nullable();
            $table->string('high_school_name')->nullable();
            $table->string('high_school_address')->nullable();
            $table->date('high_school_start_date')->nullable();
            $table->date('high_school_end_date')->nullable();
            $table->string('college_name')->nullable();
            $table->string('college_address')->nullable();
            $table->date('college_start_date')->nullable();
            $table->date('college_end_date')->nullable();

            //English And Standardized Test Scores
            $table->json('test_scores')->nullable();

            //Employment
            $table->string('employer_name')->nullable();
            $table->string('employer_address')->nullable();
            $table->string('job_title')->nullable();
            $table->string('employment_status')->nullable();
            $table->date('employment_start')->nullable();
            $table->date('employment_end')->nullable();

            //Citizen and Visa Information
            $table->json('visa_details')->nullable();

            //Lead Management
            $table->string('lead_status')->nullable();
            $table->string('applying_for')->nullable();
            $table->string('interested_country')->nullable();
            $table->string('live_course')->nullable();
            $table->string('shortlisted_courses')->nullable();

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
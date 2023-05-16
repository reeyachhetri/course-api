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
            $table->string('email');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('contact_number');
            $table->string('nationality');
            $table->enum('gender',['Male','Female','Other']);
            $table->enum('martial_status',['Single','Married','Divorced']);
            $table->date('dob');
            $table->string('country_of_birth');
            $table->string('preferred_contact');
            $table->string('native_language');

            //Emergency Contact
            $table->string('full_name');
            $table->string('relation');
            $table->string('emergency_contact_number');

            //Permanent Address
            $table->string('state');
            $table->string('district');
            $table->string('postal_code');
            $table->string('street');

            //Temporary Address
            $table->string('temporary_state');
            $table->string('temporary_district');
            $table->string('temporary_postal_code');
            $table->string('temporary_street');

            //Parent's Information
            $table->string('guardians_first_name');
            $table->string('guardians_middle_name');
            $table->string('guardians_last_name');
            $table->string('guardians_email_address');
            $table->string('guardians_contact_number');
            $table->string('guardians_education');
            $table->string('estimated_annual_household');

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
            $table->string('exams_taken');
            $table->date('exams_date');
            $table->string('overall_score');
            $table->string('listening');
            $table->string('reading');
            $table->string('writing');
            $table->string('speaking');

            //Employment
            $table->string('employer_name');
            $table->string('employer_address');
            $table->string('job_title');
            $table->string('employment_status');
            $table->date('employment_start');
            $table->date('employment_end');

            //Citizen and Visa Information
            $table->string('question');
            $table->string('option');

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

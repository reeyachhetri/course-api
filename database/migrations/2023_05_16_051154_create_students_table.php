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
            $table->string('state');
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
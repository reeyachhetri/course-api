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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('provider_id')->default(1);
            $table->string('title');
            $table->string('duration');
            $table->timestamp('earliest_intake');
            $table->date('deadline')->nullable();
            $table->integer('tuition');
            $table->integer('application_fee');
            $table->integer('commission');
            $table->string('description');
            $table->json('admission_requirements');
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
        Schema::dropIfExists('courses');
    }
};

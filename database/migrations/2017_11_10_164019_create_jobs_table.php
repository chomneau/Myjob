<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('user_id');
            $table->integer('company_id');
            $table->string('jobTitle');
            $table->longText('jobDescription');
            $table->longText('jobRequirement');
            $table->string('contractType');
            $table->string('jobCategory');
            $table->string('salary');
            $table->string('jobLocation');
            $table->string('hire');
            $table->string('deadLine');

            $table->string('level');
            $table->string('degree');
            $table->string('experience');
            $table->string('language');

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
        Schema::dropIfExists('jobs');
    }
}

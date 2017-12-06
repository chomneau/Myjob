<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('companyName');
            $table->string('logo')->nullable();
            $table->string('contactPerson');
            $table->integer('employeeSize_id');
            $table->integer('companyType_id');
            $table->integer('industry_type_id');
            $table->string('email');
            $table->string('phone');
            $table->string('website')->nullable();
            $table->string('address');
            $table->integer('location_id');
            $table->longText('about')->nullable();;

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
        Schema::dropIfExists('companies');
    }
}

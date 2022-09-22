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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('names');
            $table->string('lastnames');
            $table->string('gender');
            $table->string('cellphone');
            $table->string('phone_number');
            $table->integer('age');
            $table->string('occupation');
            $table->string('born_date');
            $table->string('civil_status');
            $table->string('nationality');
            $table->string('residence_city');
            $table->string('address');
            $table->string('education_grade');
            $table->string('email');
            $table->string('city_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};

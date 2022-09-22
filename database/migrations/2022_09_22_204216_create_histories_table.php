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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('hospital_motive');
            $table->string('actual_disease');
            $table->string('disease_bg');
            $table->string('family_bg');
            $table->string('habits');
            $table->string('smoke');
            $table->string('drugs');
            $table->string('drinks');
            $table->string('couple');
            $table->string('eating');
            $table->string('sleep');
            $table->string('sexuality');
            $table->string('workout');
            $table->string('allergies');

            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
};

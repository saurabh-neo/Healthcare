<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientOtherhistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('patient_otherhistory', function (Blueprint $table) {
            $table->increments('s_no');
            $table->BigInteger('patient_id');
            $table->string('surgeryyear')->nullable();
            $table->string('surgery')->nullable();
            $table->string('surgerylocation')->nullable();
            $table->string('allergies')->nullable();
            $table->string('pharmacy')->nullable();
            $table->string('medication')->nullable();
            $table->string('medication_strength')->nullable();
            $table->string('medication_dose')->nullable();
            $table->string('othermedhistory')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('patient_otherhistory');    
    }
}

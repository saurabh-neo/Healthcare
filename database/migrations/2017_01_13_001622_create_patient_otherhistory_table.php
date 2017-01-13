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
            $table->integer('patient_id');
            $table->string('surgeryyear');
            $table->string('surgery');
            $table->string('surgerylocation');
            $table->string('allergies');
            $table->string('pharmacy');
            $table->string('medication');
            $table->string('medication_strength');
            $table->string('medication_dose');            
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

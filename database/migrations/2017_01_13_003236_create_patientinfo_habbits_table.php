<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientinfoHabbitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('patientinfo_habbits', function (Blueprint $table) {
            $table->increments('s_no');
            $table->integer('patient_id');
            $table->string('daycaretype');
            $table->integer('daycareperweek');
            $table->string('curschool');
            $table->string('avggrades');
            $table->string('activities');
            $table->string('helmetusage');
            $table->string('seatbelt');
            $table->string('avgdiet');
            $table->string('numoz');
            $table->string('water');
            $table->string('sleep_location');
            $table->string('sleepfreq');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('patientinfo_habbits');    
    }
}

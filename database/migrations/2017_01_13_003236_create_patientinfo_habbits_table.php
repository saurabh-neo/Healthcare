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
            $table->BigInteger('patient_id');
            $table->string('daycaretype')->nullable();
            $table->BigInteger('daycareperweek')->nullable()->default(0);
            $table->string('curschool')->nullable();
            $table->string('avggrades')->nullable();
            $table->string('activities')->nullable();
            $table->string('helmetusage')->nullable();
            $table->string('seatbelt')->nullable();
            $table->string('avgdiet')->nullable();
            $table->string('numoz')->nullable();
            $table->string('water')->nullable();
            $table->string('sleep_location')->nullable();
            $table->string('sleepfreq')->nullable();
            
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

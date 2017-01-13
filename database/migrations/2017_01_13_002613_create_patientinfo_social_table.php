<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientinfoSocialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('patientinfo_social', function (Blueprint $table) {
            $table->increments('s_no');
            $table->integer('patient_id');
            $table->string('marital_status');
            $table->string('liveswith');
            $table->string('occupation');
            $table->string('pets');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('patientinfo_social');    
    }
}

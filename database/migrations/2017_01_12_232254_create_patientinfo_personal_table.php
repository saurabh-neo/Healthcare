<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientinfoPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('patientinfo_personal', function (Blueprint $table) {
            $table->increments('s_no');
            $table->integer('patient_id');
            $table->string('insurance');
            $table->string('aboutus');
            $table->string('reference');
            $table->string('ename');
            $table->string('eaddress1');
            $table->string('eaddress2');
            $table->string('ecity');
            $table->string('estate');
            $table->integer('ezip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patientinfo_personal');    
    }
}

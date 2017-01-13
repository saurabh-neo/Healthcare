<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('patientinfo', function (Blueprint $table) {
            $table->increments('s_no');
            $table->integer('patient_id');
            $table->string('gender');
            $table->string('race');
            $table->string('ethinicity');
            $table->string('pref_language');
            $table->integer('home_phone');
            $table->integer('cell_phone');
            $table->integer('work_phone');
            $table->string('email');
            $table->string('direct_address');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patientinfo');
    }
}

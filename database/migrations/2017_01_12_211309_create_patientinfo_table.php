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
            $table->BigInteger('patient_id');
            $table->string('gender');
            $table->string('race');
            $table->string('ethinicity');
            $table->string('pref_language');
            $table->BigInteger('home_phone')->nullable();
            $table->BigInteger('cell_phone')->nullable();
            $table->BigInteger('work_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('direct_address')->nullable();

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

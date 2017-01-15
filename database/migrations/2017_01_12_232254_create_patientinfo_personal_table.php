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
            $table->BigInteger('patient_id');
            $table->string('insurance')->nullable();
            $table->string('aboutus')->nullable();
            $table->string('reference')->nullable();
            $table->string('ename')->nullable();
            $table->string('eaddress1')->nullable();
            $table->string('eaddress2')->nullable();
            $table->string('ecity')->nullable();
            $table->string('estate')->nullable();
            $table->BigInteger('ezip')->nullable()->default(0);
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

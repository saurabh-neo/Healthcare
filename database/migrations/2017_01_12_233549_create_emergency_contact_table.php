<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmergencyContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('emergency_contact', function (Blueprint $table) {
            $table->increments('s_no');
            $table->integer('patient_id');
            $table->string('contact_type');
            $table->string('emname');
            $table->string('emaddress1');
            $table->string('emaddress2');
            $table->string('emcity');
            $table->string('emstate');
            $table->integer('emzip');
            $table->integer('emhphone');
            $table->integer('emcphone');
            $table->integer('emwphone');
            $table->string('emrelation');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emergency_contact');    
    }
}

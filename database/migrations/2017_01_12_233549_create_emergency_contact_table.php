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
            $table->BigInteger('patient_id');
            $table->string('contact_type')->nullable();
            $table->string('emname')->nullable();
            $table->string('emaddress1')->nullable();
            $table->string('emaddress2')->nullable();
            $table->string('emcity')->nullable();
            $table->string('emstate')->nullable();
            $table->BigInteger('emzip')->nullable()->default(0);
            $table->BigInteger('emhphone')->nullable()->default(0);
            $table->BigInteger('emcphone')->nullable()->default(0);
            $table->BigInteger('emwphone')->nullable()->default(0);
            $table->string('emrelation')->nullable();
            
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

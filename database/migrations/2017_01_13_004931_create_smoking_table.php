<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmokingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('smoking', function (Blueprint $table) {
            $table->increments('s_no');
            $table->BigInteger('patient_id');
            $table->string('smoke_detector')->nullable();
            $table->string('smoking_status')->nullable();
            $table->string('comments')->nullable();
            $table->date('start_date')->nullable();
            $table->date('quit_date')->nullable();
            $table->string('smoke_exposure')->nullable();
            $table->string('co_detector')->nullable();
            $table->string('firearms')->nullable();
            $table->string('firearms_secured')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('smoking');    
    }
}

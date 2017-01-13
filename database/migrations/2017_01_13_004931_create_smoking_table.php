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
            $table->integer('patient_id');
            $table->string('smoke_detector');
            $table->string('smoking_status');
            $table->string('comments');
            $table->date('start_date');
            $table->date('quit_date');
            $table->string('smoke_exposure');
            $table->string('co_detector');
            $table->string('firearms');
            $table->string('firearms_secured');
            
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

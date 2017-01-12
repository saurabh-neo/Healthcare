<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('address', function (Blueprint $table) {
            $table->increments('s_no');
            $table->integer('patient_id');
            $table->string('address_type');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('address');    
    }
}

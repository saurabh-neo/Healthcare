<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->increments('s_no');
            $table->string('state');
        });

        DB::table('states')->insert(
            array(
                    'state'=> 'California',
                )
        );

        DB::table('states')->insert(
            array(
                    'state'=> 'Florida',
                )
        );

        DB::table('states')->insert(
            array(
                    'state'=> 'Texas',
                )
        );

        DB::table('states')->insert(
            array(
                    'state'=> 'Michigan',
                )
        );

        DB::table('states')->insert(
            array(
                    'state'=> 'New York',
                )
        );        


    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('states');
    }
}

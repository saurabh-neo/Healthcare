<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race', function (Blueprint $table) {
            $table->increments('s_no');
            $table->string('categories');
        });

        DB::table('race')->insert(
            array(
                    'categories'=> 'Alaskan Native(Aleut,Eskimo,Indian)',
                )
        );

        DB::table('race')->insert(
            array(
                    'categories'=> 'Alaskan Native(Aleut,Eskimo,Indian)',
                )
        );

        DB::table('race')->insert(
            array(
                    'categories'=> 'American Indian or Alaska Native',
                )
        );

        DB::table('race')->insert(
            array(
                    'categories'=> 'Asian',
                )
        );

        DB::table('race')->insert(
            array(
                    'categories'=> 'Asian / Pacific Inslander',
                )
        );                        

        DB::table('race')->insert(
            array(
                    'categories'=> 'Black or African American',
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
        Schema::drop('race');    
    }
}

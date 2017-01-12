<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEthnicityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ethnicity', function (Blueprint $table) {
            $table->increments('s_no');
            $table->string('type');
        });

        DB::table('ethnicity')->insert(
            array(
                    'type'=> 'Indian',
                )
        );

        DB::table('ethnicity')->insert(
            array(
                    'type'=> 'American',
                )
        );
        DB::table('ethnicity')->insert(
            array(
                    'type'=> 'African',
                )
        );
        DB::table('ethnicity')->insert(
            array(
                    'type'=> 'European',
                )
        );
        DB::table('ethnicity')->insert(
            array(
                    'type'=> 'Australian',
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
        Schema::drop('ethnicity');    
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language', function (Blueprint $table) {
            $table->increments('s_no');
            $table->string('type');
        });

        DB::table('language')->insert(
            array(
                    'type'=> 'Hindi',
                )
        );
        DB::table('language')->insert(
            array(
                    'type'=> 'English',
                )
        );
        DB::table('language')->insert(
            array(
                    'type'=> 'French',
                )
        );
        DB::table('language')->insert(
            array(
                    'type'=> 'German',
                )
        );
        DB::table('language')->insert(
            array(
                    'type'=> 'Japnese',
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
                Schema::drop('language');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationship', function (Blueprint $table) {
            $table->increments('s_no');
            $table->string('relation');
        });

        DB::table('relationship')->insert(
            array(
                    'relation'=> 'Father',
                )
        );

        DB::table('relationship')->insert(
            array(
                    'relation'=> 'Mother',
                )
        );
        DB::table('relationship')->insert(
            array(
                    'relation'=> 'Brother',
                )
        );
        DB::table('relationship')->insert(
            array(
                    'relation'=> 'Sister',
                )
        );
        DB::table('relationship')->insert(
            array(
                    'relation'=> 'Uncle',
                )
        );
        DB::table('relationship')->insert(
            array(
                    'relation'=> 'Aunt',
                )
        );
        DB::table('relationship')->insert(
            array(
                    'relation'=> 'Friend',
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
                Schema::drop('relationship');
    }
}

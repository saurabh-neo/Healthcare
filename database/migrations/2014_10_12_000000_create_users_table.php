<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('patient_id');
            $table->string('patient_name');
            $table->string('password');

        });

        DB::table('users')->insert(
            array(
                    'cid'=> '1',
                    'name' => 'Saurabh',
                    'email' => 'neo@domain.com',
                    'password' => 'neo'
                )
        );

        DB::table('users')->insert(
            array(
                    'cid'=> '2',
                    'name' => 'Satyajeet',
                    'email' => 'jeet@domain.com',
                    'password' => '222'
                )
        );
        DB::table('users')->insert(
            array(
                    'cid'=> '3',
                    'name' => 'Trin',
                    'email' => 'trin@domain.com',
                    'password' => '333'
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
        Schema::drop('users');
    }
}

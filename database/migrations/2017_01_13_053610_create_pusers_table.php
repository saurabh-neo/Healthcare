<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pusers', function (Blueprint $table) {
            $table->BigIncrements('patient_id');
            $table->string('patient_name');
            $table->string('password');
            
        });

        DB::table('pusers')->insert(
            array(
                    'patient_id'=> '1',
                    'patient_name' => 'Saurabh',
                    'password' => 'neo'
                )
        );

        DB::table('pusers')->insert(
            array(
                    'patient_id'=> '2',
                    'patient_name' => 'Satyajeet',
                    'password' => '222'
                )
        );
        DB::table('pusers')->insert(
            array(
                    'patient_id'=> '3',
                    'patient_name' => 'Trin',
                    'password' => '333'
                )
        );

        DB::table('pusers')->insert(
            array(
                    'patient_id'=> '4',
                    'patient_name' => 'CM_Technologies',
                    'password' => '444'
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
       Schema::drop('pusers');    
    }
}

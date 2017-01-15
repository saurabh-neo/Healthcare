<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientMedhistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('patient_medhistory', function (Blueprint $table) {
            $table->increments('s_no');
            $table->BigInteger('patient_id');
            $table->BigInteger('s_no_medhistory')->nullable()->default(0);
            $table->string('medhistory')->nullable();
        //  $table->string('othermedhistory')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('patient_medhistory');    
    }
}

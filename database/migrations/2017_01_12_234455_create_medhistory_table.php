<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedhistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medhistory', function (Blueprint $table) {
            $table->increments('s_no');
            $table->string('mtype');
        });

        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'AAA',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'ADHD',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Alcohol/Substance Abuse',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Allergies',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Alzheimers',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Anxiety',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Arthritis',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Asthama',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Atrial Fibrillation',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Back Pain, Chronic',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Bleeding Problems',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'CAD',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Cancer',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Cancer - Breast',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Cancer - Colon',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Cancer - Prostate',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Cancer - Skin',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Cancer - Thyroid',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'CHF',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'COPD',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Crohns Disease',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'CVA',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Dementia',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Depression',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Diabetes',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Epilespy',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Erectile Dysfunction',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Fibromyalgia',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'GI Bleeding',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Gout',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Head Concussion',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Headaches / Chronic',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Hearing Loss',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Heart Attack',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Heart Disease',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Heartburn',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'High Blood Pressure',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'High Cholesterol',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'HTN',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Hyperlipidemia',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Hyperthyrodism',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'IDDM',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Insomnia',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Irritable Bowel Syndrome',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'MI',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'NIDDM',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Obesity',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Osteporosis',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'PID',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Reflux',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Seizures',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Sickle Cell',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Stroke',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Surgery, Appendectomy',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Surgery,Bypass',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Surgery,CABG',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Surgery,Cholecystectomy',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Surgery,Coronary Artery Bypass Graftling',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Surgery,Hysterectomy',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Surgery, Joint Replacement',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Surgery, Mastectomy',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Surgery, Sinus Surgery',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Surgery ,Thyroidectomy',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Thyroid Condition',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'TIA',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Tonsilitis',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Tuberculosis Expossure',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'UIcer',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'UIcers',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'UTI,Chronic',
                )
        );
        DB::table('medhistory')->insert(
            array(
                    'mtype'=> 'Vision Loss',
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
        Schema::drop('medhistory');    
    }
}

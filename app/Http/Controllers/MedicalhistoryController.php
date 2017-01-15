<?php

namespace App\Http\Controllers;

use App\medhistory;
use App\relationship;
use App\family_medhistory;
use App\patient_medhistory;
use App\patient_otherhistory;
use App\patientinfo_social;
use App\patientinfo_habbits;
use App\smoking;
use Illuminate\Http\Request;

class MedicalhistoryController extends Controller
{
    
     public function savemedicaldata(Request $request)
    {

        $medhis = patient_medhistory::where('patient_id','=',\Session::get('pid'))->first();
//        $personal=patientinfo_personal::where('patient_id','=',\Session::get('pid'))->first();
  
        // To Send To Medical History for
        $relation = relationship::select('s_no','relation')->get();            
        $medhis = medhistory::select('s_no','mtype')->get();

        foreach($request->mtype as $type)
        {
            $sno = medhistory::where('mtype','=',$type)->first();                
            echo $sno->s_no;
            patient_medhistory::insert(
                ['patient_id'=>\Session::get('pid'),
                's_no_medhistory'=>$sno->s_no,
                'medhistory' => $type,
                ]
            );

        }

       foreach($request->fmtype as $ftype)
        {
            $sno = medhistory::where('mtype','=',$ftype)->first();                
            echo $sno->s_no;
            echo " \nrelin".$request->relation[$sno->s_no];
            family_medhistory::insert(
                ['patient_id'=>\Session::get('pid'),
                'fhistory'=>$ftype,
                'relation' => $request->relation[$sno->s_no],
                ]
             );
        }


            patient_otherhistory::insert(
                ['patient_id'=>\Session::get('pid'),
                'surgeryyear'=>$request->surgeryyear,
                'surgery' => $request->surgery,
                'surgerylocation' => $request->surgerylocation,
                'allergies' => $request->allergies , 
                'pharmacy' => $request->pharmacy ,
                'medication' => $request->medication ,
                'medication_strength' => $request->medication_strength ,
                'medication_dose' => $request->medication_dose ,
                'othermedhistory' => $request->othermedhistory
                ]
            );

            patientinfo_social::insert(
                ['patient_id'=>\Session::get('pid'),
                'marital_status'=>$request->marital_status,
                'liveswith' => $request->liveswith,
                'occupation' => $request->occupation , 
                'pets' => $request->pets ,
                ]
            );


                smoking::insert(
                ['patient_id'=>\Session::get('pid'),
                'smoke_detector'=>$request->smoke_detector,
                'smoking_status' => $request->smoking_status,
                'comments' => $request->comments,
                'start_date' => $request->start_date , 
                'quit_date' => $request->quit_date ,
                'smoke_exposure' => $request->smoke_exposure ,
                'co_detector' => $request->co_detector ,
                'firearms' => $request->firearms ,
                'firearms_secured' => $request->firearms_secured
                ]
            );


                patientinfo_habbits::insert(
                ['patient_id'=>\Session::get('pid'),
                'daycaretype'=>$request->daycaretype,
                'daycareperweek' => $request->daycareperweek,
                'curschool' => $request->curschool,
                'avggrades' => $request->avggrades , 
                'activities' => $request->activities ,
                'helmetusage' => $request->helmetusage ,
                'seatbelt' => $request->seatbelt ,
                'avgdiet' => $request->avgdiet ,
                'numoz' => $request->numoz,
                'water' => $request->water,
                'sleep_location' => $request->sleep_location,
                'sleepfreq' => $request->sleepfreq
                ]
            );   
        \Session::set('medsuccess', "Medical History Details Saved Successfully");           
        return view('medicalhistory',['relation'=>$relation,'medhistory'=>$medhis]);
    }


    public function plogt(Request $request)
    {
          \Session::flush();
        return view('plogin');
    }
}

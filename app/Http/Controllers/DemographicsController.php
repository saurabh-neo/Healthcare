<?php

namespace App\Http\Controllers;

use App\Patientinfo;
use App\patientinfo_personal;
use App\address;
use App\emergency_contact;
use App\medhistory;
use App\relationship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DemographicsController extends Controller
{
    //
    public function savedata(Request $request)
    {

    //    echo " Testing123 Heyyyyyyyyyyaaa".$request->email;
        $pdata = Patientinfo::where('patient_id','=',\Session::get('pid'))->first();
        $addr=address::where('patient_id','=',\Session::get('pid'))->first();
        $personal=patientinfo_personal::where('patient_id','=',\Session::get('pid'))->first();
        $emergc=emergency_contact::where('patient_id','=',\Session::get('pid'))->first();
  
        // To Send To Medical History for
        $relation = relationship::select('s_no','relation')->get();            
        $medhis = medhistory::select('s_no','mtype')->get();
      //  echo $request->em1name." is qeuaaaaaaaaaaaaaaaaa";

        if(empty($pdata))
        {
  //          echo "New Ueserrrrr"." Ethnicity = ".$request->ethnicity;

            Patientinfo::insert(
                ['patient_id'=>\Session::get('pid'),
                'gender'=>$request->gender,
                'race' => $request->race,
                'ethinicity' => $request->ethinicity,
                'pref_language' => $request->pref_language , 
                'home_phone' => $request->home_phone ,
                'cell_phone' => $request->cell_phone ,
                'work_phone' => $request->work_phone ,
                'email' => $request->email ,
                'direct_address' => $request->direct_address
                ]
            );

        }
        if(!empty($pdata))
        {
//            echo "User Already Exist";

            Patientinfo::where('patient_id','=',\Session::get('pid'))
                        ->update(
                            ['gender'=>$request->gender,
                            'race' => $request->race,
                            'ethinicity' => $request->ethinicity,
                            'pref_language' => $request->pref_language , 
                            'home_phone' => $request->home_phone ,
                            'cell_phone' => $request->cell_phone ,
                            'work_phone' => $request->work_phone ,
                            'email' => $request->email ,
                            'direct_address' => $request->direct_address
                            ]
                         );


        }

            if(empty($addr))
            {
                    address::insert(
                        [
                            'patient_id'=>\Session::get('pid'),
                            'address_type' => "Physical Address",
                            'address1' => $request->address1 ,
                            'address2' => $request->address2,
                            'city' => $request->city,
                            'state' => $request->state,
                            'zip' => $request->zip
                        ]
                    );
            }

            if(!empty($addrs))
            {
                    address::where('patient_id','=',\Session::get('pid'))
                        ->update(
                            [
                                'address_type' => $request->address_type,
                                'address1' => $request->address1 ,
                                'address2' => $request->address2,
                                'city' => $request->city,
                                'state' => $request->state,
                                'zip' => $request->zip
                            ]
                    );

            }


            if(empty($personal))
            {
                //echo "xipixizipzipzizpzip";
                    if($request->ezip==NULL)
                        $request->ezip=0;
                    patientinfo_personal::insert(
                        [
                            'patient_id'=>\Session::get('pid'),
                            'insurance' => $request->insurance,
                            'aboutus' => $request->aboutus,
                            'reference' => $request->reference,
                            'ename' => $request->ename,
                            'eaddress1' => $request->eaddress1 ,
                            'eaddress2' => $request->eaddress2,
                            'ecity' => $request->ecity,
                            'estate' => $request->estate,
                            'ezip' => $request->ezip
                        ]
                    );
            }
            if(!empty($personal))
            {
                    if($request->ezip==NULL)
                        $request->ezip=0;

                    patientinfo_personal::where('patient_id','=',\Session::get('pid'))
                        ->update(
                            [
                            'insurance' => $request->insurance,
                            'aboutus' => $request->aboutus,
                            'reference' => $request->reference,
                            'ename' => $request->ename,
                            'eaddress1' => $request->eaddress1 ,
                            'eaddress2' => $request->eaddress2,
                            'ecity' => $request->ecity,
                            'estate' => $request->estate,
                            'ezip' => $request->ezip
                            ]
                    );
            }

            
            if(empty($emergc))
            {
//                echo " emzip VALUE IS ".$request->em1zip;
  //                  echo " Hphone".$request->em1home_phone." in emrgy ".$request->em1zip;
                    if($request->em1zip==NULL)
                        $request->em1zip=0;
                    if($request->em1home_phone==NULL)
                        $request->em1home_phone=0;
                    if($request->em1cell_phone==NULL)
                        $request->em1cell_phone=0;
                  if($request->em1work_phone==NULL)
                        $request->em1work_phone=0;

                    emergency_contact::insert(
                        [
                            'patient_id'=>\Session::get('pid'),
                            'contact_type' => "Emergency Address 1",
                            'emname' => $request->em1name,
                            'emaddress1' => $request->em1address1,
                            'emaddress2' => $request->em1address2,
                            'emcity' => $request->em1city,
                            'emstate' => $request->em1state,
                            'emzip' => $request->em1zip,
                            'emhphone' => $request->em1home_phone,
                            'emcphone' => $request->em1cell_phone,
                            'emwphone' => $request->em1work_phone,
                            'emrelation' => $request->em1relation                            
                        ]
                    );

                        if($request->em2name!=NULL || $request->em2address1!=NULL)
                            {
                                    if($request->em2zip==NULL)
                                        $request->em2zip=0;
                                    if($request->em2home_phone==NULL)
                                        $request->em2home_phone=0;
                                    if($request->em2cell_phone==NULL)
                                        $request->em2cell_phone=0;
                                    if($request->em2work_phone==NULL)
                                        $request->em2work_phone=0;


                                emergency_contact::insert(
                                [

                                    'patient_id'=>\Session::get('pid'),
                                    'contact_type' => "Emergency Address 2",
                                    'emname' => $request->em2name,
                                    'emaddress1' => $request->em2address1,
                                    'emaddress2' => $request->em2address2,
                                    'emcity' => $request->em2city,
                                    'emstate' => $request->em2state,
                                    'emzip' => $request->em2zip,
                                    'emhphone' => $request->em2home_phone,
                                    'emcphone' => $request->em2cell_phone,
                                    'emwphone' => $request->em2work_phone,
                                    'emrelation' => $request->em2relation                            
                                ]);
                            }
                                
                        if($request->em3name!=NULL || $request->em3address1!=NULL)
                            {
                                if($request->em3zip==NULL)
                                    $request->em3zip=0;
                                if($request->em3home_phone==NULL)
                                    $request->em3home_phone=0;
                                if($request->em3cell_phone==NULL)
                                    $request->em3cell_phone=0;
                                if($request->em3work_phone==NULL)
                                    $request->em3work_phone=0;

                                
                                emergency_contact::insert(
                                [
                                    'patient_id'=>\Session::get('pid'),
                                    'contact_type' => "Emergency Address 3",
                                    'emname' => $request->em3name,
                                    'emaddress1' => $request->em3address1,
                                    'emaddress2' => $request->em3address2,
                                    'emcity' => $request->em3city,
                                    'emstate' => $request->em3state,
                                    'emzip' => $request->em3zip,
                                    'emhphone' => $request->em3home_phone,
                                    'emcphone' => $request->em3cell_phone,
                                    'emwphone' => $request->em3work_phone,
                                    'emrelation' => $request->em3relation                            
                                ]);
                            }
            }


       if(!empty($emergc))
            {
                    emergency_contact::where('patient_id','=',\Session::get('pid'))
                        ->update(
                            [
                            'contact_type' => "Emergency Address 1",
                            'emname' => $request->em1name,
                            'emaddress1' => $request->em1address1,
                            'emaddress2' => $request->em1address2,
                            'emcity' => $request->em1city,
                            'emstate' => $request->em1state,
                            'emzip' => $request->em1zip,
                            'emhphone' => $request->em1home_phone,
                            'emcphone' => $request->em1cell_phone,
                            'emwphone' => $request->em1work_phone,
                            'emrelation' => $request->em1relation                            
                            ]
                         );
            }

        \Session::flash('demosuccess', "Demographics Details Saved Successfully");           
        return view('medicalhistory',['relation'=>$relation,'medhistory'=>$medhis]);

    }    
  // end of savedata function

}

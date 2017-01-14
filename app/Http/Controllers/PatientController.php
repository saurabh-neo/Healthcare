<?php

namespace App\Http\Controllers;

use App\puser;
use App\language;
use App\State;
use App\ethnicity;
use App\race;
use App\relationship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    //

    public function validatelogin(Request $request)
    {
        $data=$request->all();
        $pusers= puser::where('patient_id',$request->patient_id)->where ('password',$request->password) -> first();

        if(!empty($pusers))
        {
            \Session::set('pid', $request->patient_id);
            \Session::set('pname',$pusers->patient_name);
            $lang=language::select('s_no','type')->get();  //condition syntax: ->where('s_no','=','2')->get();
            $ethn=ethnicity::select('s_no','type')->get();
            $race=race::select('s_no','categories')->get();
            $state=State::select('s_no','state')->get();
            $relation=relationship::select('s_no','relation')->get();            
            
            return view('demographics',['lang'=>$lang,'ethn'=>$ethn,'race'=>$race,'state'=>$state,'relation'=>$relation]);
        }
        else
        {
           \Session::flash('message', "User Not Exist/Wrong Credentials");           
            return view('plogin');        
        }
    }


    public function login(Request $request)
    {
        return view('plogin');
    }

    public function showform(Request $request)
    {
        return view('demographics');
    }


}

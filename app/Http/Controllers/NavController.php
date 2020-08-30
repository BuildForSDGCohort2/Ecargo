<?php

namespace App\Http\Controllers;

use App\Diagnosis;
use App\Disease;
use App\EHR;
use App\HealthRecord;
use App\States;
use App\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavController extends Controller
{

    public function putSympDiag(Request $request){
        $symp = Diagnosis::where('symptom_id', $request->id)
            ->where('user_id', Auth::user()->id)
            ->where('status', 0)->first();

         $getType = $request->type;

         if($getType == "input"){
             if($symp == null){
                 $diag = new Diagnosis();
                 $diag->user_id = Auth::user()->id;
                 $diag->symptom_id = $request->id;
                 $diag->magnitude = $request->weight;
                 $diag->save();
                 return "success!";
             }else{
                 $symp->update(['magnitude' => $request->weight]);
                 return "success!";
             }
         }else{
             if($symp == null){
                 return $symp;
             }
             $symp->delete();
             return "success";
         }
    }

    public function patientDiagnose(){
        $symptoms = Symptom::where('gender', Auth::user()->gender)->orwhere('gender', 'Both')->paginate(9);
        return view('diagnose', compact('symptoms'));
    }

    public function putRelation(){
       $symptoms = Symptom::where('id', '>', 16)->get();
       foreach($symptoms as $item){
           $item->diseases()->sync(2);
       }
       return 1;
    }
    public function login(){
        return view('login');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function myprofile(){
        return view('profile');
    }
    public function myrecord(){
        $ehrs = HealthRecord::where('user_id', Auth::user()->id)->get();
        return view('record', compact('ehrs'));
    }

    public function contactDoctor(){
        return view('contactdoctor');
    }

    public function EHR(){
        $ehrs = HealthRecord::all();
        return view('ehr.index', compact('ehrs'));
    }

   /* public function addStates(){
        $states = array("ABUJA FCT", "ABIA", "ADAMAWA", "AKWA IBOM", "ANAMBRA", "BAUCHI",
            "BAYELSA", "BENUE", "BORNO", "CROSS RIVER", "DELTA", "EBONYI", "EDO",
            "EKITI", "ENUGU", "GOMBE", "IMO", "JIGAWA", "KADUNA", "KANO", "KATSINA", "KEBBI",
            "KOGI", "KWARA", "LAGOS", "NASSARAWA", "NIGER", "OGUN", "ONDO", "OSUN", "OYO",
            "PLATEAU", "RIVERS", "SOKOTO", "TARABA", "YOBE", "ZAMFARA", "Outside Nigeria");

        foreach($states as $state){
            States::create(['name' => $state]);
        }
    }*/
}

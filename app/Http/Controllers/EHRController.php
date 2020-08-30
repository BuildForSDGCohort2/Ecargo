<?php

namespace App\Http\Controllers;

use App\DegreeMembership;
use App\Diagnosis;
use App\Disease;
use App\DiseaseDrug;
use App\Drug;
use App\HealthRecord;
use App\Report;
use App\Symptom;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EHRController extends Controller
{

    public function ehrHistory($id){
        $history = HealthRecord::findOrFail($id);
        $symptoms = Diagnosis::where('ehrCode', $history->ehrCode)->get();
        $report = Report::where('health_record_id', $history->id)->first();
        $disease = Disease::find($history->disease->id);
       // $drugs = DiseaseDrug::where('disease_id', $history->disease->id)->get();
        return view('ehrhistory', compact('history', 'symptoms', 'report', 'disease'));
    }

    public function putHealthRecord(Request $request){

       $diagnoses = Diagnosis::where('user_id', Auth::user()->id)->where('status', 0)->get();
       $ehrCode = $this->genCode();

       // set status and add ehrCode for diagnosedSymptoms
       foreach($diagnoses as $diagno){
           $diagno->update(['status' => 1, 'ehrCode' => $ehrCode]);
       }

       // Add new health record
        $ehr = new HealthRecord();
        $ehr->disease_id = $request->disease;
        $ehr->user_id = Auth::user()->id;
        $ehr-> ehrCode = $ehrCode;
        $ehr->status = 0;
        $ehr->save();
        return redirect('/my-record')->with('success', 'New Health record added');
    }

    public function genCode(){
        $getrNumber = rand(0, 10000);
        $newCode = md5(Carbon::now().$getrNumber.Auth::user()->id);
        return $newCode;
    }
}

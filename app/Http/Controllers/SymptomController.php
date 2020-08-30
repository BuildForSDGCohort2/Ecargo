<?php

namespace App\Http\Controllers;

use App\Age;
use App\Diagnosis;
use App\Disease;
use App\DiseaseSymptom;
use App\Http\Requests\AddSymptomRequest;
use App\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SymptomController extends Controller
{
    public function diagnose(){
        $diagnosis = Diagnosis::where('user_id', Auth::user()->id)
            ->where('status', 0)->where('ehrCode', "N/A")->get();

        if(count($diagnosis) == 0){
            return "nothing to diagnose, select from listed symptoms to continue";
        }else{
            $disArray = array();
            foreach($diagnosis as $diag){
                $symp = Symptom::find($diag->symptom_id);
                $counter = count($symp->diseases);
                if($counter > 1){
                    //   echo $symp->sname." belongs to ".$counter." diseases <br/>";
                    //  echo "these diseases are <br/>";
                    foreach($symp->diseases as $dis){
                        //   echo $dis->dname.", <br/>";
                    }
                    $matchdisease = $symp->diseases()->where('magnitude', $diag->magnitude)->first();
                    //    echo 'matched disease by weight is '. $matchdisease->dname."<br/>";
                    array_push($disArray, $matchdisease->id);
                }else{
                    //     echo $symp->sname." belongs to ".$counter." diseases <br/>";
                    $matchdisease = $symp->diseases()->where('symptom_id', $diag->symptom_id)->first();
                    array_push($disArray, $matchdisease->id);
                }
            }

            //   echo implode( ", ", $disArray);
            //   echo "<br/>";
            $counts = array_count_values($disArray);
            arsort($counts);
            $popular = array_slice(array_keys($counts), 0, 1, true);
            //  echo "most occurred value is ".$popular[0];
            //    echo "<br/>";
            $disease = Disease::where('id', $popular[0])->first();
           // return "Hello ".Auth::user()->fname." you are suffering from ". $disease->dname." please contact doctor";
            return $disease;
        }
    }
    public function do_diagnose(Request $request){
        $diagnosis = Diagnosis::where('user_id', Auth::user()->id)
                            ->where('status', 0)->where('ehrCode', "N/A")->get();
        if(count($diagnosis) == 0){
         return "nothing to diagnose, select from listed symptoms to continue";
        }else{
            return "success!";
        }
    }

    public function diagResult(){
      $diagnoses = Diagnosis::where('user_id', Auth::user()->id)
          ->where('status', 0)->where('ehrCode', "N/A")->get();
      if(count($diagnoses) == 0){
          return redirect()->route('diagnose');
      }
      $disease = $this->diagnose();
      return view('diagresult', compact('diagnoses', 'disease'));
    }

    public function index()
    {
     $symptoms = Symptom::paginate(15);
     return view('symptom.index', compact('symptoms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $ages = Age::all();
      $diseases = Disease::all();
      return view('symptom.create', compact('ages', 'diseases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddSymptomRequest $request)
    {
        $gender = $request->gender;
        if($request->symptom == null){
            return "something went wrong";
        }

        foreach($request->symptom as $symptom){
            $symp = Symptom::create([
                'sname' => $symptom,
                'gender' => $gender,
                'age_id' => $request->age,
            ]);
        //    $symp->diseases()->sync($request->sdisease);
        }
        return redirect('/symptom')->with("success", 'Symptoms successfully added to a disease!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ages = Age::all();
        $diseases = Disease::all();
        $symptom = Symptom::find($id);
        return view('symptom.edit', compact('ages', 'diseases', 'symptom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteSymptom(Request $request){
        $symp = Symptom::find($request->id);
        $symp->delete();
        return "success";
    }
}

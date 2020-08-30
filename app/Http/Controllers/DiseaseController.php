<?php

namespace App\Http\Controllers;

use App\Disease;
use App\Drug;
use App\Http\Requests\AddDiseaseRequest;
use App\Symptom;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addSymptom(){
        $diseases = Disease::all();
        $symptoms = Symptom::all();
        return view('disease.addSymptom', compact('diseases','symptoms'));
    }

    public function addDrug(){
        $diseases = Disease::all();
        $drugs = Drug::all();
        return view('disease.addDrug', compact('diseases','drugs'));
    }

    public function inputDrug(Request $request){
        $disease = Disease::find($request->disease);
        foreach($request->drug as $drug){
            $disease->drugs()->syncWithoutDetaching($drug);
        }
        return redirect('/disease')->with("success", 'drugs successfully added!');
    }

    public function inputSymptom(Request $request){
        $disease = Disease::find($request->disease);
        foreach($request->symptom as $symptom){
            $disease->symptoms()->syncWithoutDetaching($symptom);
        }
        return redirect('/disease')->with("symptom", 'Symptoms successfully added!');
    }

    public function index()
    {
        $diseases = Disease::paginate(15);
        return view('disease.index', compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disease.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddDiseaseRequest $request)
    {
        $newEntry = new Disease();
        $newEntry->dname = $request->dname;
        $newEntry->ddescription = $request->ddescription;
        $newEntry->save();
        return redirect('/disease')->with("success", 'Symptoms successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disease = Disease::find($id);
        return view('disease.show', compact('disease'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disease = Disease::findOrFail($id);
        return view('disease.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddDiseaseRequest $request, $id)
    {
        $disease = Disease::findOrFail($id);
        $disease->update(['dname' => $request->dname, 'ddescription' => $request->ddescription]);
        return redirect('/disease')->with("updated", 'Disease successfully updated!');
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

    public function deleteDisease(Request $request){
        $dis = Disease::find($request->id);
        $dis->delete();
        return "success";
    }
}

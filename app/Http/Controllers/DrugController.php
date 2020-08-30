<?php

namespace App\Http\Controllers;
use App\Disease;
use App\Drug;
use App\HealthRecord;
use App\Report;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addMed(Request $request){
        $disease = Disease::findOrFail($request->dId);
        $ehr = HealthRecord::findOrFail($request->eId);

        if(count($disease->drugs) == 0){
            return "no drug for this disease";
        }

        if($request->report == null){
            $ehr->update(['status' => 1]);
            return "success!";
        }

        $ehr->update(['status' => 1]);
        Report::create(['report' => $request->report, 'health_record_id' => $ehr->id]);
        return "success!";
    }


    public function index()
    {
        $drugs = Drug::paginate();
        return view('drug.index', compact('drugs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diseases = Disease::all();
        return view('drug.create', compact('diseases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //   return $request->all();
        if($request->drugName == null){
            return "something went wrong";
        }
        foreach($request->drugName as $drug){
            Drug::create([
                'drugName' => $drug,
            ]);
        }
        return redirect('/drug')->with("success", 'Drug successfully created!');
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
        //
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
}

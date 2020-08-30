<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\States;
use App\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = User::where('role_id', 3)->get();
        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = States::all();
        return view('patient.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddPatientRequest $request)
    {
        $nPatient = new User();
        $nPatient->fname = $request->fname;
        $nPatient->lname = $request->lname;
        $nPatient->phone = $request->phone;
        $nPatient->email = $request->email;
        $nPatient->dateOfBirth = $request->dateOfBirth;
        $nPatient->gender = $request->gender;
        $nPatient->occupation = $request->occupation;
        $nPatient->state_id = $request->state;
        $nPatient->address = $request->address;
        $nPatient->password = bcrypt("@".$request->fname);
        $nPatient->cpassword = "@".$request->fname;
        $nPatient->role_id = 3;
        $nPatient->save();
        return redirect('/patient')->with("success", 'Patient successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = User::findOrFail($id);
        return view('patient.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = User::findOrFail($id);
        $states = States::all();
        return view('patient.edit', compact('patient', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, $id)
    {
        $uPatient = User::findOrFail($id);
        $uPatient->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'dateOfBirth' => $request->dateOfBirth,
            'gender' => $request->gender,
            'occupation' => $request->occupation,
            'state_id' => $request->state,
            'address' => $request->address
        ]);
        return redirect('/patient')->with("updated", 'Patient successfully updated!');
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

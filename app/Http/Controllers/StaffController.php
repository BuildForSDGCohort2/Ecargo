<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\States;
use App\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = User::where('role_id', 2)->get();
        return view('staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = States::all();
        return view('staff.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddPatientRequest $request)
    {
        $nStaff = new User();
        $nStaff->fname = $request->fname;
        $nStaff->lname = $request->lname;
        $nStaff->phone = $request->phone;
        $nStaff->email = $request->email;
        $nStaff->dateOfBirth = $request->dateOfBirth;
        $nStaff->gender = $request->gender;
        $nStaff->occupation = $request->occupation;
        $nStaff->state_id = $request->state;
        $nStaff->address = $request->address;
        $nStaff->password = bcrypt("@".$request->fname);
        $nStaff->cpassword = "@".$request->fname;
        $nStaff->role_id = 2;
        $nStaff->save();
        return redirect('/staff')->with("success", 'Staff successfully added!');
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
        $staff = User::findOrFail($id);
        $states = States::all();
        return view('staff.edit', compact('staff', 'states'));
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
        return redirect('/staff')->with("updated", 'Patient successfully updated!');
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

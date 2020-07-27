<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Doctor::all();
        $doctors = Doctor::all();
        return view('doctors.crud',compact('doctors'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.details');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['id'=>'required',
        'first_name'=>'required',
        'last_name'=>'required',
        'address'=>'required',
        'mobile'=>'required',
        'timing'=>'required',
        'speciality'=>'required',
        'experience'=>'required',
        'date_of_joining'=>'required',
        'ward_id'=>'required']);
        Doctor::create($request->all());
        return redirect()->route('doctors.index')->with('success','Entry created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view('doctors.update',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate(['id'=>'required',
        'first_name'=>'required',
        'last_name'=>'required',
        'address'=>'required',
        'mobile'=>'required',
        'timing'=>'required',
        'speciality'=>'required',
        'experience'=>'required',
        'date_of_joining'=>'required',
        'ward_id'=>'required']);
        $doctor->update($request->all());
        return redirect()->route('doctors.index')->with('success','Doctor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success','Entry deleted successfully.');
    }
}

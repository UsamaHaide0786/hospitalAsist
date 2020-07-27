<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Appointment::all();
        $appointments = Appointment::all();
        return view('appointments.crud',compact('appointments'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appointments.crud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'date_of_appointment'=>'required',
            'time_of_appointment'=>'required',
            'patient_id'=>'required',
            'doctor_id'=>'required',
            'ward_id'=>'required',
            'hospital_id'=>'required',
        ]);
        Appointment::create($request->all());
        return redirect()->route('appointments.index')->with('Success','Appointent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        return view('appointments.update',compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'id'=>'required',
            'date_of_appointment'=>'required',
            'time_of_appointment'=>'required',
            'patient_id'=>'required',
            'doctor_id'=>'required',
            'ward_id'=>'required',
            'hospital_id'=>'required',
        ]);
        $appointment->update($request->all());
        return redirect()->route('appointments.index')->with('success','Appointment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success','Appointment deleted successfully.');
    }

}
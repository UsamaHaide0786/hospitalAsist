<?php

namespace App\Http\Controllers;

use App\Bed;
use Illuminate\Http\Request;

class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Bed::all();
        $beds = Bed::all();
        return view('beds.crud',compact('beds'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beds.crud');
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
            'room_id'=>'required',
            'patient_id'=>'required',
            'hospital_id'=>'required',
        ]);
        Bed::create($request->all());
        return redirect()->route('beds.index')->with('success','Bed created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function show(Bed $bed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function edit(Bed $bed)
    {
        return view('beds.update',compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bed $bed)
    {
        $request->validate([
            'id'=>'required',
            'room_id'=>'required',
            'patient_id'=>'required',
            'hospital_id'=>'required',
        ]);
        $bed->update($request->all());
        return redirect()->route('beds.index')->with('success','Bed updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bed $bed)
    {
        $bed->delete();
        return redirect()->route('beds.index')->with('success','Bed deleted successfully.');
    }
}

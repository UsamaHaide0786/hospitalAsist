<?php

namespace App\Http\Controllers;

use App\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospitals.form');
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
          'id' => 'required',
          'name' => 'required',
          'address' => 'required',
          'ownership' => 'required',
          'since' => 'required',
      ]);

      Hospital::create($request->all());
      return redirect("registered")->with('success','Product created successfully.');


                      }




     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
       Hospital::all();
       $hospitals = Hospital::all();

       return view('hospitals.crud',compact('hospitals'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Hospital
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
        $hospitals = Hospital::find($id);
        return view('hospitals.update',compact('hospitals','id'));

     }

    public function update(Request $request, $id)
    {
      $request->validate([
          'id' => 'required',
          'name' => 'required',
          'address' => 'required',
          'ownership' => 'required',
          'since' => 'required',
      ]);
      $hospitals = Hospital::find($id);
      $hospitals->id = $request->get('id');
      $hospitals->name = $request->get('name');
      $hospitals->address = $request->get('address');
      $hospitals->ownership = $request->get('ownership');
      $hospitals->since = $request->get('since');
      $hospitals->save();

     $hospital->update($request->all());
     return redirect("registered")->with('success','Product created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        //
    }
}

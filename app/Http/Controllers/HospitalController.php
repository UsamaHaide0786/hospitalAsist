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

      return redirect()->route('hospitals.index')
                ->with('success','Product created successfully.');


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
     public function edit(Hospital $hospital)
     {
        ;
        return view('hospitals.update',compact('hospital'));

     }

    public function update(Request $request, Hospital $hospital)
    {
      $request->validate([
          'id' => 'required',
          'name' => 'required',
          'address' => 'required',
          'ownership' => 'required',
          'since' => 'required',
      ]);

     $hospital->update($request->all());
     return redirect()->route('hospitals.index')
               ->with('success','Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->route('hospitals.index')
                  ->with('success','Product deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Employee::all();
        $employees = Employee::all();
        return view('Employees.crud',compact('doctors'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.crud');
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
            'first_name'=>'required',
            'last_name'=>'required',
            'position'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'experience'=>'required',
            'date_of_joining'=>'required',
        ]);
        Employee::create($request->all());
        return redirect()->route('employyees.index')->with('success','employee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.update',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'id'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'position'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'experience'=>'required',
            'date_of_joining'=>'required',
        ]);
        $employee->update($request->all());
        return redirect()->route('doctors.index')->with('success','Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success','Entry deleted successfully.');
    }
}

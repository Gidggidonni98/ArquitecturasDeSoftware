<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
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
        $employees = Employee::all();
        return $employees;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //SET DE MIS CAMPOS CON EL REQUEST

        $employee = new Employee();
        $employee ->name= $request->name;
        $employee ->last_name= $request->last_name;
        $employee ->job= $request->job;
        $employee ->phone= $request->phone;
        $employee ->address= $request->address;
        $employee ->age= $request->age;


        $employee->save();
        //Guardar el objeto en la base de datos
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return $employee;
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
        $employee = Employee::findOrFail($request->$id);
        $employee ->name= $request->name;
        $employee ->last_name= $request->last_name;
        $employee ->job= $request->job;
        $employee ->phone= $request->phone;
        $employee ->address= $request->address;
        $employee ->age= $request->age;


        $employee->save();
        return $employee;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::destroy($id);
        return $employee;
    }
}

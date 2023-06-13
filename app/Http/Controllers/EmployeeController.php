<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //All employees
        $employees = Employee::all()->toArray();
        return array_reverse($employees);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Add employee
        $employee = new Employee([
            'id_card'       => $request->input('id_card'),
            'birthday'      => $request->input('birthday'),
            'name'          => $request->input('name'),
            'lastname'      => $request->input('lastname'),
            'phone'         => $request->input('phone'),
            'mobile'        => $request->input('mobile'),
            'sector'        => $request->input('sector'),
            'street'        => $request->input('street'),
            'address'       => $request->input('address'),
            'department'    => $request->input('department'),
            'job_title'     => $request->input('job_title'),
            'contract'      => $request->input('contract'),
            'date_of_entry' => $request->input('date_of_entry')
        ]);
        $employee->save();
        return response()->json('success');
        //return response()->json('The employee successfully added');
    }

    /**
     * Display the specified resource.
     */
   public function show(string $id)
   {
       //Show employee
       $employee = Employee::find($id);
       return response()->json($employee);
   }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Update employee
        $employee = Employee::find($id);
        $employee->update($request->all());
        return response()->json('success');
        //return response()->json('The employee successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Delete employee
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json('success');
        //return response()->json('The employee successfully deleted');
    }
}

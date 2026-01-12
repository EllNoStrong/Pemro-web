<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'position' => 'required',
            'email'    => 'required|email|unique:employees,email',
            'salary'   => 'required|numeric|min:0',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')
            ->with('success', 'Employee telah dibuat kerenn!!!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name'     => 'required',
            'position' => 'required',
            'email'    => 'required|email|unique:employees,email,' . $employee->id,
            'salary'   => 'required|numeric|min:0',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')
            ->with('success', 'Employee telah diupdate kerenn!!!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')
            ->with('success', 'Employee telah dihapus kerenn!!!.');
    }
}

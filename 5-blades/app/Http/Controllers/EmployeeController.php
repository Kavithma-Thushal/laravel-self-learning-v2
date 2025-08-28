<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('pages.employee');
    }

    public function create(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'address' => $request->address,
            'salary' => $request->salary,
        ]);

        return redirect()->back()->with('success', 'Employee saved successfully');
    }
}

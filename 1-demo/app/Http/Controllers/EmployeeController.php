<?php

namespace App\Http\Controllers;

class EmployeeController extends Controller
{
    public function create()
    {
        return response()->json('Employee created successfully');
    }

    public function update()
    {
        return response()->json('Employee updated successfully');
    }

    public function delete()
    {
        return response()->json('Employee deleted successfully');
    }

    public function get()
    {
        return response()->json('Employee retrieved successfully');
    }

    public function getAll()
    {
        return response()->json('All employees retrieved successfully');
    }
}

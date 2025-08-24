<?php

namespace App\Http\Controllers;

class EmployeeController extends Controller
{
    public function create()
    {
        return response()->json('Employee created');
    }
}

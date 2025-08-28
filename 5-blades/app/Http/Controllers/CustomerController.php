<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('pages.customer');
    }

    public function create(Request $request)
    {
        Customer::create([
            'name' => $request->name,
            'address' => $request->address,
            'salary' => $request->salary,
        ]);

        return redirect()->back()->with('success', 'Customer saved successfully');
    }
}

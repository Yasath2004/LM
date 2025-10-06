<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        return view('loans.index');
    }
    public function create()
    {
        return view('loans.create');
    }
    public function store(Request $request)
    {
        // Validate the request data
        return redirect('/loans')->with('success', 'Loan created successfully.');
    }
}

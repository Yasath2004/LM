<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function create()
    {
        return view('loans.create');
    }
    public function store(Request $request )
    {

        $request->validate([
            'name' => ['required', 'min:3'],
            'phone' => 'required',
            'nic' => ['required',"digits:12" ,'unique:customers,nic'],
        ]);

        Loan::create([
            'name' => $request->name,
            'phone_number' => $request->phone,
            'nic' => $request->nic,
        ]);

        return redirect("loan/create")->with('success', 'Customer created successfully.');
    }


    public function index()
    {

     $loans = Loan::all();   

        return view('loans.index',[
            'customers' => $loans
        ]);
    }
}

   


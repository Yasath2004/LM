<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function create()
    {
        $customers = Customer::query()
            ->select('id', 'name')
            ->get();

        return view('loans.create',[
            'customers' => $customers,
        ]);
    }
    public function store(Request $request )
    {
        // validate inputs

        // create loan
        Loan::create([
            'customer_id' => $request->customer_id,
            'amount' => $request->amount,
            'interest_rate' => $request->interest,
            'term_months' => $request->term,
            'start_date' => $request->start_date,
            'due_date' => '2025-12-31', // calculate this date,
            'note' => $request->note,
        ]);


        return redirect("loan/create")->with('success', 'Customer created successfully.');
    }

    public function index()
    {

     $loans = Loan::all();

        return view('loans.index',[
            'loans' => $loans
        ]);
    }
}




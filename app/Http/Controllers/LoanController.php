<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Number;

class LoanController extends Controller
{
    public function create()
    {
        $customers = Customer::query()
            ->select('id', 'name')
            ->get();

        return view('loans.create', [
            'customers' => $customers,
        ]);
    }

    public function store(Request $request)
    {
        // validate inputs
        $request->validate([
            'customer' => ['required', 'exists:customers,id'],
            'amount' => ['required', 'numeric', 'gt:1000'],
            'interest' => ['required', 'numeric', 'between:0,100'],
            'term' => ['required', 'numeric', 'gt:0'],
        ]);

        $startDate = now();

        // create loan
        Loan::create([
            'customer_id' => $request->input('customer'),
            'amount' => $request->input('amount'),
            'interest_rate' => $request->input('interest'),
            'term_months' => $request->input('term'),
            'start_date' => $startDate->toDateString(),
            'due_date' => $startDate->addMonths($request->integer('term'))->toDateString(),
            'note' => $request->input('note'),
            'created_by' => Auth::id()
        ]);


        return redirect(route('loans.index'))
            ->with('success', 'Loan created successfully.');
    }

    public function index(Request $request)
    {
        if ($request->has('search')){
            return $this->search($request);
        }

        $loans = Loan::query()
            ->with('customer')
            ->latest()
            ->paginate();

        return view('loans.index', [
            'loans' => $loans
        ]);
    }

    public function show(Loan $loan)
    {
        $details = [
            'Number' => $loan->loan_number,
            'Amount' => Number::currency($loan->amount, 'LKR'),
            'Balance' => Number::currency($loan->getBalance(), 'LKR'),
            'Interest' => $loan->interest_rate . "%",
            'Term' => $loan->term_months . " Months",
            'Start Date' => $loan->start_date,
            'End Date' => $loan->due_date,
            'Customer' => $loan->customer->name,
            'Status' => $loan->status,
            'Note' => $loan->note,
        ];

        $payments = $loan->premiums()
            ->latest()
            ->get()
            ->map(function ($premium) {
                return [
                    'number' => $premium->loan_premium_number,
                    'amount' => Number::currency($premium->amount, 'LKR'),
                    'method' => $premium->method,
                    'date' => $premium->created_at->toDateString(),
                ];
            });

        return view('loans.show', [
            'details' => $details,
            'loan' => $loan->id,
            'payments' => $payments,
            'balance' => $loan->getBalance(),
        ]);
    }

    public function payment(Loan $loan, Request $request)
    {
        if ($loan->isSettled()) {
            return back()
                ->withErrors([
                    'error' => 'Loan is already settled.'
                ]);
        }

        $request->validate([
            'amount' => ['required', 'numeric', 'gt:0', 'lte:' . $loan->getBalance()],
            'method' => ['required', 'in:cash,cheque,bank'],
        ]);

        $loan->premiums()->create([
            'amount' => $request->integer('amount'),
            'method' => $request->input('method'),
        ]);

        $loan->fresh();

        if ($loan->isSettled()) {
            $loan->update([
                'status' => 'settled'
            ]);
        }


        return back()
            ->with('success', 'Payment added successfully.');
    }

    public function recovery()
    {

        $loans = Loan::query()
            ->with('customer')
            ->latest()
            ->paginate();


        return view('loans.recovery', [
            'loans' => $loans,
        ]);
    }

    public function search(Request $request)
    {
        $loan = Loan::query()
            ->where('loan_number', 'LIKE', '%' . $request->input('search') . '%')
            ->first();

        if ($loan) {
            return redirect()->route('loans.show', $loan);
        }

        return back()->withErrors(['error' => 'Loan not found.']);
    }
}




<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\LoanPremium;
use Illuminate\Http\Request;

class LoanPaymentController extends Controller
{
    public function addPayment(Loan $loan,Request $request)
    {
        // validate input

        // store payment
        $loan->premiums()->create([
            'amount' => $request->amount,
            'method' => 'cash',
            'created_by' => 1, // this should be updated to logged-in user id
        ]);

        // return to the loan details page
    }

    public function deletePayment(LoanPremium $premium)
    {
        $premium->delete();

        // return to the loan detail page
    }
}

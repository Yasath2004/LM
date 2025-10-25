<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customer.create');
    }
    public function store(Request $request )
    {

        $request->validate([
            'name' => ['required', 'min:3'],
            'phone' => ['required','digits:10'],
            'nic' => ['required',"digits:12" ,'unique:customers,nic'],
        ]);

        Customer::create([
            'name' => $request->name,
            'phone_number' => $request->phone,
            'nic' => $request->nic,
        ]);

        return redirect("customers/create")->with('success', 'Customer created successfully.');
    }


    public function index()
    {

     $customers = Customer::all();

        return view('customer.index',[
            'customers' => $customers
        ]);
    }

    public function show(Customer $customer)
    {
        $details = [
            'Name' => $customer->name,
            'Phone' => $customer->phone_number,
            'NIC' => $customer->nic,
            'Registered Date' => $customer->created_at->toDateTimeString(),
        ];

        $loans = $customer->loans()->get();

        return view('customer.show',[
            'details' => $details,
            'loans' => $loans,
        ]);
    }
}

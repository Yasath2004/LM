@extends('layouts.default')


@section('content')
<div class="container mt-5 animate__animated animate__fadeIn">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary d-flex align-items-center">
          Loan Details
        </h2>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card  border-0 rounded-3">
                <div class="card-body">
                    <table class="table">
                        @foreach ($details as $title=>$value)
                            <tr>
                                <td>{{$title}}</td>
                                <td>{{ $value }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header">Add Payment</div>
                <div class="card-body">

                    <form action="{{ route('loans.payment',$loan)  }}" method="post" >
                        @csrf
                        <div class="mb-3">
                            <label for="">Amount</label>
                            <input type="number" name="amount" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Method</label>
                            <select name="method" id="method" class="form-control">
                                <option value="cash">Cash</option>
                                <option value="cheque">Cheque</option>
                                <option value="bank">Bank</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Add</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Payments</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <th>Number</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Date</th>
                        </thead>

                        <tbody>
                        @forelse ($payments as $payment)

                            <tr>
                                <td>{{ $payment['number'] }}</td>
                                <td>{{ $payment['amount'] }}</td>
                                <td>{{ $payment['method'] }}</td>
                                <td>{{ $payment['date'] }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center"> No payments</td>
                            </tr>

                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


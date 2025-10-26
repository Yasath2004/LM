@extends('layouts.default')

@section('content')
    <h1>Add New Loan</h1>
    <div class="row">

        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('loans.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="customer" class="form-label">Customer</label>
                            <select class="form-select" name="customer">
                                <option disabled selected value="">Select Customer</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="amount" name="amount">
                        </div>
                        <div class="mb-3">
                            <label for="interest" class="form-label">Interest (%)</label>
                            <input type="number" class="form-control" id="interest" name="interest">
                        </div>

                        <div class="mb-3">
                            <label for="term" class="form-label">Term (Months)</label>
                            <input type="number" class="form-control" id="term" name="term">
                        </div>

                        <div class="mb-3">
                            <label for="note" class="form-label">Note</label>
                            <textarea class="form-control" id="note" name="note"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>


    </div>
    </div>
@endsection

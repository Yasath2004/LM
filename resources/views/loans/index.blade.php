@extends('layouts.default')


@section('content')
    <div class="container mt-5 animate__animated animate__fadeIn">

        <div class="w-50">
            <form action="" method="get">
            <div class="input-group mb-3">
                <input name="search" type="text" class="form-control" placeholder="Search Loan">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
            </form>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-primary d-flex align-items-center">
                All Loans
            </h2>
            <a class="btn btn-primary shadow-sm px-4 py-2" href="/loans/create">
                <i class="bi bi-cash-coin me-2"></i> Add New Loan
            </a>
        </div>

        <div class="card  border-0 rounded-3">
            <div class="card-body p-0">
                <table class="table table-bordered align-middle mb-0">
                    <thead>
                    <tr>
                        <th>Loan Number</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Interest Rate</th>
                        <th>Term (Months)</th>
                        <th>Start Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($loans as $loan)
                        <tr>
                            <td>
                                <a href="{{ route('loans.show',$loan) }}">
                                    {{ $loan->loan_number }}
                                </a>
                            </td>
                            <td>{{ $loan->customer->name }}</td>
                            <td>LKR {{ number_format($loan->amount, 2) }}</td>
                            <td>{{ $loan->interest_rate }}%</td>
                            <td>{{ $loan->term_months }}</td>
                            <td>{{ $loan->start_date->toDateString() }}</td>
                            <td>{{ $loan->due_date->toDateString() }}</td>
                            <td>
                                @if ($loan->status == 'active')
                                    <span class="badge bg-success">Active</span>
                                @elseif ($loan->status == 'closed')
                                    <span class="badge bg-secondary">Closed</span>
                                @else
                                    <span class="badge bg-danger">Defaulted</span>
                                @endif
                            </td>
                        </tr>

                    @empty
                        <tr class="text-center">
                            <td colspan="9">No Items</td>
                        </tr>

                    @endforelse
                    </tbody>
                </table>

                {{ $loans->links() }}
            </div>
        </div>
    </div>

@endsection


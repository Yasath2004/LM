@extends('layouts.default')


@section('content')
<div class="container mt-4 animate__animated animate__fadeIn">

    <h1 class="text-primary fw-bold mb-4 d-flex align-items-center">
        Customer Profile
    </h1>

    <div class="row">
        <div class="col-lg-12 col-md-8 col-sm-12">

            <div class="card border-0 rounded-3 mt-3 ">
                <table class="table">
                    @foreach ($details as $title=>$item)
                    <tr>
                        <td>{{ $title }}</td>
                        <td>{{ $item }}</td>
                    </tr>
                        @endforeach
                </table>
            </div>

        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6>Loan History</h6>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>Number</th>
                            <th>Amount</th>
                            <th>Balance</th>
                            <th>Interest</th>
                            <th>Terms</th>
                            <th>End Date</th>
                        </thead>

                        <tbody>
                            @forelse ($loans as $loan)
                                <tr>
                                    <td>
                                        <a href="{{ route('loans.show', $loan['id'])  }}">
                                            {{ $loan['number'] }}
                                        </a>
                                    </td>
                                    <td>{{ $loan['amount'] }}</td>
                                    <td>{{ $loan['balance'] }}</td>
                                    <td>{{ $loan['interest'] }}</td>
                                    <td>{{ $loan['terms'] }}</td>
                                    <td>{{ $loan['end_date'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No Loans</td>
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


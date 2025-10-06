@extends('layouts.default')


@section('content')
<div class="container mt-5 animate__animated animate__fadeIn">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary d-flex align-items-center">
            {{-- <img src="https://cdn-icons-png.flaticon.com/512/891/891462.png" width="45" class="me-2" alt="Loan Icon"> --}}
            All Loans
        </h2>
        <a class="btn btn-primary shadow-sm px-4 py-2" href="/loans/create">
            <i class="bi bi-cash-coin me-2"></i> Add New Loan
        </a>
    </div>

    <div class="card shadow-lg border-0 rounded-3 animate__animated animate__zoomIn">
        <div class="card-body p-0">
            <table class="table custom-table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Loan Number</th>
                        <th>Amount</th>
                        <th>Interest Rate</th>
                        <th>Term (Months)</th>
                        <th>Start Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Phone Number</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loans as $loan)
                        <tr>
                            <td>
                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135679.png" width="24" class="me-2">
                                {{ $loan->loan_number }}
                            </td>
                            <td>${{ number_format($loan->amount, 2) }}</td>
                            <td>{{ $loan->interest_rate }}%</td>
                            <td>{{ $loan->term_months }}</td>
                            <td>{{ $loan->start_date }}</td>
                            <td>{{ $loan->due_date }}</td>
                            <td>
                                @if ($loan->status == 'active')
                                    <span class="badge bg-success">Active</span>
                                @elseif ($loan->status == 'closed')
                                    <span class="badge bg-secondary">Closed</span>
                                @else
                                    <span class="badge bg-danger">Defaulted</span>
                                @endif
                            </td>
                            <td>{{ $loan->phone_number }}</td>
                            <td>{{ $loan->note }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Custom CSS Styling --}}
<style>
    body {
        background-color: #f4f6f9;
        font-family: 'Poppins', sans-serif;
    }

    h2 {
        letter-spacing: 0.5px;
    }

    .card {
        border-radius: 15px;
        background-color: #ffffff;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: scale(1.01);
        box-shadow: 0 8px 20px rgba(13, 110, 253, 0.15);
    }

    .custom-table thead {
        background: linear-gradient(90deg, #0d6efd, #004dc9);
        color: #fff;
    }

    .custom-table thead th {
        padding: 14px;
        font-weight: 600;
        text-align: center;
        border: none;
    }

    .custom-table tbody tr {
        transition: 0.3s ease;
        text-align: center;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #f8f9fa;
    }

    .custom-table tbody tr:hover {
        background-color: #e9f2ff;
        transform: scale(1.01);
    }

    .custom-table td {
        padding: 12px;
        vertical-align: middle;
        border: none;
    }

    .btn-primary {
        border-radius: 8px;
        font-weight: 500;
        transition: 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #004dc9;
        transform: translateY(-2px);
    }

    .badge {
        font-size: 0.9rem;
        padding: 6px 12px;
        border-radius: 6px;
        letter-spacing: 0.3px;
    }

    img {
        vertical-align: middle;
    }
</style>

{{-- Include Animate.css --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> --}}
@endsection


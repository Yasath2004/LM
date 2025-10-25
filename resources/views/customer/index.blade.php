@extends('layouts.default')

@section('content')
<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center gap-3">
            <h2 class="fw-bold text-primary mb-0">All Customers</h2>
        </div>
        <a class="btn btn-primary shadow-sm px-4 py-2" href="/customers/create">
            <i class="bi bi-person-plus me-2"></i> Add New
        </a>
    </div>

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body">
            <table class="table custom-table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>NIC</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>
                                <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png"
                                     alt="User Avatar"
                                     class="rounded-circle shadow-sm"
                                     width="45" height="45">
                            </td>
                            <td class="fw-semibold">
                                <a href="{{ route('customers.show',$customer) }}">{{ $customer->name }}</a>
                            </td>
                            <td>{{ $customer->phone_number }}</td>
                            <td>{{ $customer->nic }}</td>
                            <td>{{ $customer->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Optional Illustration Below --}}
    <div class="text-center mt-5">
        <img src="https://cdn-icons-png.flaticon.com/512/4406/4406312.png"
             alt="Customer Illustration"
             width="280" class="img-fluid opacity-75">
        <p class="mt-3 text-muted">Effortlessly manage your customers and keep track of all records.</p>
    </div>
</div>

{{-- Custom CSS Styling --}}
<style>
    body {
        background-color: #f4f6f9;
        font-family: 'Poppins', sans-serif;
    }

    .card {
        border-radius: 15px;
        background-color: #fff;
        transition: 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07);
        transform: translateY(-3px);
    }

    .custom-table thead {
        background: linear-gradient(90deg, #0d6efd, #004dc9);
        color: #fff;
        border-radius: 10px 10px 0 0;
    }

    .custom-table thead th {
        padding: 14px;
        font-weight: 600;
        text-align: center;
        border: none;
    }

    .custom-table tbody tr {
        transition: all 0.3s ease;
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
        border-radius: 10px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #004dc9;
        transform: translateY(-2px);
    }
</style>
@endsection


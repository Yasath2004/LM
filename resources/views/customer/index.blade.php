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

    <div class="card  border-0 rounded-3">
        <div class="card-body">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>NIC</th>
                        <th>Created At</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td class="">
                                <a href="{{ route('customers.show',$customer) }}">{{ $customer->name }}</a>
                            </td>
                            <td>{{ $customer->phone_number }}</td>
                            <td>{{ $customer->nic }}</td>
                            <td>{{ $customer->created_at->format('Y-m-d') }}</td>
                            <td>
                                 @if ($customer->grade == 'A')
                                   <span class="badge bg-success ms-2">A</span>
                                @elseif ($customer->grade == 'B')
                                    <span class="badge bg-primary ms-2">B</span>
                                 @elseif ($customer->grade == 'C')
                                    <span class="badge bg-warning text-dark ms-2">C</span>
                                @else
                                    <span class="badge bg-danger ms-2">D</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


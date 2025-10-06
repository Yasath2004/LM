@extends('layouts.default')

@section('content')
    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2 class="mb-4">All Customers</h2>

         <a class="btn btn-primary" href="/customers/create">Add New</a>
        
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>NIC</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->phone_number }}</td>
                        <td>{{ $customer->nic }}</td>
                        <td>{{ $customer->created_at}}</td>
                    </tr>
                @endforeach --}}
            </tbody>
    </div>
@endsection
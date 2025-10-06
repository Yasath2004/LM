@extends('layouts.default')

@section('content')
    <div class="container mt-4">
        <h1 class="text-primary fw-bold mb-4">Create Customer</h1>

        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12">

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="alert alert-success shadow-sm border-0 fade show" role="alert">
                        ✅ {{ session('success') }}
                    </div>
                @endif

                {{-- Error Messages --}}
                @if ($errors->any())
                    <div class="alert alert-danger shadow-sm border-0">
                        <strong>Please fix the following errors:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Customer Form --}}
                <div class="card shadow-lg border-0 rounded-3 mt-3 form-card">
                    <div class="card-body p-4">
                        <form action="/customers/store" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Full Name</label>
                                <input type="text" class="form-control custom-input" id="name" name="name" placeholder="Enter customer name">
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label fw-semibold">Phone Number</label>
                                <input type="text" class="form-control custom-input" id="phone" name="phone" placeholder="Enter phone number">
                            </div>

                            <div class="mb-3">
                                <label for="nic" class="form-label fw-semibold">NIC Number</label>
                                <input type="text" class="form-control custom-input" id="nic" name="nic" placeholder="Enter NIC number">
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mt-2 shadow-sm">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Custom Styling --}}
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Poppins', sans-serif;
        }

        .form-card {
            background: #ffffff;
            border-radius: 12px;
            transition: 0.3s ease;
        }

        .form-card:hover {
            transform: scale(1.01);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }

        .custom-input {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 10px;
            transition: all 0.2s;
        }

        .custom-input:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.15rem rgba(13, 110, 253, 0.25);
        }

        .btn-primary {
            border-radius: 8px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        .alert {
            border-radius: 10px;
            font-size: 0.95rem;
        }
    </style>
@endsection

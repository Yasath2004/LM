@extends('layouts.default')


@section('content')
<div class="container mt-4 animate__animated animate__fadeIn">

    <h1 class="text-primary fw-bold mb-4 d-flex align-items-center">
        Create Customer
    </h1>

    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-12">

            {{-- Customer Form --}}
            <div class="card shadow-lg border-0 rounded-3 mt-3 form-card animate__animated animate__zoomIn">
                <div class="card-body p-4">
                    <form action="{{ route('customers.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Full Name</label>
                            <input value="{{ old('name') }}" type="text" class="form-control custom-input" id="name" name="name" placeholder="Enter customer name" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label fw-semibold">Phone Number</label>
                            <input value="{{ old('phone') }}" type="text" maxlength="10" class="form-control custom-input" id="phone" name="phone" placeholder="Enter phone number" required>
                        </div>

                        <div class="mb-3">
                            <label for="nic" class="form-label fw-semibold">NIC Number</label>
                            <input maxlength="12" value="{{ old('nic') }}" type="text" class="form-control custom-input" id="nic" name="nic" placeholder="Enter NIC number" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-2 shadow-sm submit-btn">
                            <i class="bi bi-person-check me-2"></i> Submit
                        </button>
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
        border-radius: 15px;
        transition: 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .form-card::before {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle at top left, rgba(13, 110, 253, 0.05), transparent 70%);
        z-index: 0;
    }

    .form-card:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 25px rgba(13, 110, 253, 0.2);
    }

    .form-card .card-body {
        position: relative;
        z-index: 1;
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
        font-weight: 600;
        letter-spacing: 0.3px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #004dc9;
        transform: translateY(-2px);
    }

    .submit-btn i {
        transition: transform 0.3s ease;
    }

    .submit-btn:hover i {
        transform: rotate(10deg);
    }

    .alert {
        border-radius: 10px;
        font-size: 0.95rem;
    }

    /* Animation library link */
</style>

{{-- Include Animate.css for fade and zoom effects --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection


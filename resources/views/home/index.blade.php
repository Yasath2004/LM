@extends('layouts.default')

@section('content')
<div class="container mt-5">
    <div class="hero-section text-center p-5 rounded-4 shadow-sm">

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-5 fw-bold text-primary mb-3">
                    Welcome to the Loan Management System
                </h1>
                <p class="lead text-muted mb-4">
                    Easily manage customers, track loans, and streamline your financial operations.
                </p>

                <a href="/customers/create" class="btn btn-primary btn-lg me-3 shadow-sm">
                    <i class="bi bi-person-plus-fill me-2"></i>Add New Customer
                </a>
                <a href="/loans/create" class="btn btn-outline-primary btn-lg shadow-sm">
                    <i class="bi bi-cash-coin me-2"></i>Add New Loan
                </a>
            </div>

            <div class="col-lg-6">
                <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png"
                     alt="Loan Management Illustration"
                     class="img-fluid hero-image">
            </div>
        </div>
    </div>

    {{-- Optional Feature Cards Section --}}
    <div class="row text-center mt-5">
        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow-sm p-4 feature-card">
                <img src="https://cdn-icons-png.flaticon.com/512/3063/3063829.png" alt="Customer Icon" class="mb-3 feature-icon">
                <h5>Manage Customers</h5>
                <p class="text-muted">Easily store and update customer information in one place.</p>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow-sm p-4 feature-card">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Payment Icon" class="mb-3 feature-icon">
            <h5>Manage Payments</h5>
            <p class="text-muted">Record, view, and manage loan payments efficiently.</p>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow-sm p-4 feature-card">
                <img src="https://cdn-icons-png.flaticon.com/512/2936/2936636.png" alt="Report Icon" class="mb-3 feature-icon">
                <h5>Generate Reports</h5>
                <p class="text-muted">View insights and analytics about your loan system performance.</p>
            </div>
        </div>
    </div>
</div>

{{-- Custom CSS Styling --}}
<style>
    body {
        background-color: #f4f6f9;
        font-family: 'Poppins', sans-serif;
    }

    .hero-section {
        background: linear-gradient(135deg, #eaf1ff, #ffffff);
        border-radius: 20px;
        transition: all 0.3s ease;
    }

    .hero-section:hover {
        transform: scale(1.01);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    .hero-image {
        max-width: 80%;
        border-radius: 20px;
        animation: float 4s ease-in-out infinite;
    }

    @keyframes float {
        0% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
        100% { transform: translateY(0); }
    }

    .btn {
        border-radius: 10px;
        font-weight: 500;
        letter-spacing: 0.3px;
    }

    .feature-card {
        border-radius: 16px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        width: 70px;
        height: 70px;
    }
</style>
@endsection

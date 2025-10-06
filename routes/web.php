<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

// home route
Route::redirect('/', '/home');
Route::get('/home', [HomeController::class, 'index']);

// customer routes
Route::get('/customers/create', [CustomerController::class, 'create']);

Route::post('/customers/store', [CustomerController::class, 'store']);

Route::get('/customers', [Customercontroller::class, 'index']);


//loan routes

Route::get('/loans', [App\Http\Controllers\LoanController::class, 'index']);

Route::get('/loans/create', [App\Http\Controllers\LoanController::class, 'create']);

Route::post('/loans/store', [App\Http\Controllers\LoanController::class, 'store']);

Route::post('/loans/{loan}/add-payment', [App\Http\Controllers\LoanPaymentController::class, 'addPayment']);

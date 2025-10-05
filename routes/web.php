<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Templatecontroller;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;



Route::get('/customers/create', [CustomerController::class, 'create']);

Route::post('/customers/store', [CustomerController::class, 'store']);

Route::get('/customers', [Customercontroller::class, 'index']);



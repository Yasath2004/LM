<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;


// auth routes
Route::get('login', [AuthController::class, 'loginPage']);
Route::post('login', [AuthController::class, 'authCheck'])->name('login');

Route::group(['middleware' => ['auth']], function () {


    // dashboard route

    Route::redirect('/', '/home');

    Route::get('/home', [HomeController::class, 'index'])->name('home');;

    // customer routes
    Route::resource('customers', CustomerController::class);

    //loan routes
    Route::post('loans/{loan}/payment',[LoanController::class, 'payment'])->name('loans.payment');;
    Route::resource('loans', App\Http\Controllers\LoanController::class);

    //payment routes

    Route::get('/payments', [App\Http\Controllers\LoanPaymentController::class, 'index']);

    Route::get('/payments/create', [App\Http\Controllers\LoanPaymentController::class, 'create']);

    Route::post('/payments/store', [App\Http\Controllers\LoanPaymentController::class, 'store']);

    Route::delete('/payments/{premium}/delete', [App\Http\Controllers\LoanPaymentController::class, 'deletePayment']);


    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

});

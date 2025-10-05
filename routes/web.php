<?php

use App\Http\Controllers\Templatecontroller;
use Illuminate\Support\Facades\Route;



Route::get('/', [Templatecontroller::class, 'index']);

Route::get('/loans', [Templatecontroller::class, 'loans']);

Route::get('/payments', [Templatecontroller::class, 'payments']);

Route::get('/settings', [Templatecontroller::class, 'settings']);

Route::get('/collections', [Templatecontroller::class, 'collection']);

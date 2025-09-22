<?php

use App\Http\Controllers\Templatecontroller;
use Illuminate\Support\Facades\Route;



Route::get('/', [Templatecontroller::class, 'index']);

Route::get('/loans', [Templatecontroller::class, 'loans']);

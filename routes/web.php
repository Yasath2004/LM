<?php

use App\Http\Controllers\Templatecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [Templatecontroller::class, 'index']);

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Templatecontroller extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

public function loans()
    {
        return view('loans');
    }
public function collection()
    {
        return view('collections');
    }
public function payments()
    {
        return view('payments');
    }
public function settings()
    {
        return view('settings');
    }
}
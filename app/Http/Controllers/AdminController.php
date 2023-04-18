<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
            
        return view('backend.index');
    }

    public function widget()
    {
        return view('backend.widget');
    }
}

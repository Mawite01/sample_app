<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $user = User::with('roles')->get();
        // dd($user);
        return view('backend.index');
    }

    public function widget()
    {
        
        return view('backend.widget');
    }
}

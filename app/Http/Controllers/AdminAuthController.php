<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLoginForm()
{
    return view('login');
}
}



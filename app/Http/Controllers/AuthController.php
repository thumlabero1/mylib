<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class AuthController extends Controller
{
    public function loginPost(Request $request)  {
        $credentials =[
            'email' => $request->email,
            'password' => $request->password,

        ];
        if (Auth::attempt($credentials, $request->input('remember'))) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('error', "error");
    }
}

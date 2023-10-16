<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    
    public function author(Request $request)
    {
        $this->validate($request, [
            "email" => "required|email:filter",
            "password" => "required|min:6",
        ]);

        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials, $request->input('remember'))) {
            return redirect()->route('admin.dashboard');
        }
        
        // Authentication failed using the default User model, let's try with the Account model
        $User = User::where('email', $request->input('email'))->first();

        if ($User && password_verify($request->input('password'), $User->password)) {
            // Authentication success
            Auth::login($User, $request->input('remember'));
            return redirect()->route('admin.dashboard');
        }

        Session::flash('error', 'Email hoặc password không chính xác');
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function logout()
{
    Auth::logout(); // Đăng xuất người dùng
    return redirect('admin/login'); // Chuyển hướng đến trang đăng nhập sau khi đăng xuất
}


    
}

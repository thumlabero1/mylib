<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AdminAuthController extends Controller
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
        
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')],
             $request->input('remember'))) {
            return redirect()->intended(url('admin/dashboard'));
                
            }
            
              
        Session::flash('error', 'Email hoặc password không chính xác');
        return redirect()->back();

        // dd($request->all());
        
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

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->intended(route('login')); // Đổi 'login' thành route của trang đăng nhập admin
        }

        return $next($request);
    }
}

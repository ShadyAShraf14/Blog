<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfAdmin
{
    public function handle($request, Closure $next)
    {
        // تحقق من كون المستخدم هو Admin
        if (Auth::check() && Auth::user()->user_type === 'admin') {
            return $next($request);
        }

        // إذا لم يكن المستخدم Admin، أعد توجيهه إلى صفحة تسجيل الدخول
        return redirect('/login');
    }
}

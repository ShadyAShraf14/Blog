<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // عرض نموذج تسجيل الدخول
    public function showLoginForm()
    {
        return view('Back.pages.login');
    }

    // معالجة طلب تسجيل الدخول
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // تحقق مما إذا كان المستخدم Admin
            if (Auth::user()->user_type === 'admin') {
                // إعادة توجيه إلى /dashboard/posts إذا كان Admin
                return redirect()->route('posts.index');
            }

            // تسجيل الخروج إذا لم يكن Admin
            Auth::logout();
            return redirect()->route('login')->withErrors('Unauthorized access');
        }

        return redirect()->route('login')->withErrors('Invalid credentials');
    }

    // تسجيل الخروج
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // نمایش فرم ورود
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // عملیات ورود
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // نمایش فرم ثبت‌نام
    public function showRegistrationForm()
    {
        return view('auth.reg');
    }

    // عملیات ثبت‌نام
    public function register(UserRequest $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // ورود خودکار کاربر پس از ثبت‌نام

        // هدایت به صفحه خانگی
        return redirect()->route('login_page');

    }
}

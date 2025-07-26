<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // اگر کاربر وارد نشده باشد، به صفحه ورود ریدایرکت می‌شود.
        if (! Auth::check()) {
            return redirect()->route('login'); // یا صفحه‌ای که می‌خواهید ریدایرکت کنید
        }

        // اگر کاربر وارد شده باشد، ادامه فرآیند انجام می‌شود
        return $next($request);
    }
}

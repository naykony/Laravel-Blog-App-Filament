<?php

namespace App\Http;

use App\Http\Middleware\IsLoggedIn; // وارد کردن کلاس middleware
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        // سایر middleware های جهانی
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // سایر middleware های گروه وب
        ],

        'api' => [
            // middleware های API
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // سایر middleware ها
        'auth' => IsLoggedIn::class,  // ثبت middleware جدید
    ];
}

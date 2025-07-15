<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">وبلاگ من</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">خانه</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">پست‌ها</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">درباره ما</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">تماس با ما</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('create') }}">ساخت</a></li>

                    <!-- نمایش پیام برای کاربر وارد شده -->
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="#">تو اکانت هستی</a>
                        </li>

                        <!-- فرم برای logout -->
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link" style="cursor: pointer; text-decoration: none;">خروج</button>
                            </form>
                        </li>
                    @endauth

                    <!-- لینک ورود یا ثبت‌نام برای کاربر وارد نشده -->
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login_page') }}">ورود</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('reg_page') }}">ثبت‌نام</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</body>

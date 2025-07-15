<!-- login.html -->
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
</head>
<body>
    <h1>ورود به حساب کاربری</h1>
    <form action="{{ route('login') }}" method="POST"> <!-- آدرس و متد را طبق نیاز خود تنظیم کنید -->
    @csrf
        <div>
            <label for="email">ایمیل</label>
            <input type="email" name="email" id="email" placeholder="ایمیل خود را وارد کنید" required>
        </div>
        <div>
            <label for="password">رمز عبور</label>
            <input type="password" name="password" id="password" placeholder="رمز عبور خود را وارد کنید" required>
        </div>
        <button type="submit">ورود</button>
    </form>
    <p>حساب کاربری ندارید؟ <a href="{{ route('reg') }}">ثبت‌نام کنید</a></p>
</body>
</html>

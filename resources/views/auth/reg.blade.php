<!-- register.html -->
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت‌نام</title>
</head>
<body>
    <h1>ایجاد حساب کاربری جدید</h1>
    <form action="{{ route('reg') }}" method="POST"> <!-- آدرس و متد را طبق نیاز خود تنظیم کنید -->
    @csrf
        <div>
            <label for="name">نام</label>
            <input type="text" name="name" id="name" placeholder="نام خود را وارد کنید" required>
        </div>
        <div>
            <label for="email">ایمیل</label>
            <input type="email" name="email" id="email" placeholder="ایمیل خود را وارد کنید" required>
        </div>
        <div>
            <label for="password">رمز عبور</label>
            <input type="password" name="password" id="password" placeholder="رمز عبور خود را وارد کنید" required>
        </div>

        <button type="submit">ثبت‌نام</button>
    </form>
    <p>حساب کاربری دارید؟ <a href="{{ route('login') }}">وارد شوید</a></p>
</body>
</html>

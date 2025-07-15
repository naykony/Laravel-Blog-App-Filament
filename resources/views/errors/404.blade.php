@extends('app.Index')


@section('content')

<div class="container mt-5 text-center">
    <h1>صفحه مورد نظر یافت نشد</h1>
    <p>متاسفانه صفحه‌ای که جستجو کردید وجود ندارد. لطفاً آدرس را دوباره بررسی کنید یا از منو برای بازگشت استفاده کنید.</p>
    <a href="{{ route('home') }}"class="btn btn-primary">بازگشت به خانه</a>
</div>

@endsection

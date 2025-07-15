@extends('app.Index')


@section('content')
    <header class="text-center mt-5">
        <h1>خوش آمدید به وبلاگ من!</h1>
        <p>محتوای جذاب و مفید برای خواندن</p>
        <a href="{{ route('blog') }}" class="btn btn-primary">مشاهده پست‌ها</a>
    </header>
@endsection

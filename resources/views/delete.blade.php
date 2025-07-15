@extends('index')


@section('content')


<!-- Navbar -->
<!-- (navbar code here, same as in index.html) -->

<div class="container mt-5 text-center">
    <h2>آیا از حذف این پست مطمئن هستید؟</h2>
    <p>این عملیات غیرقابل برگشت است.</p>
    <form method="POST" action="destroy.html">
        <button type="submit" class="btn btn-danger">حذف پست</button>
        <a href="blog.html" class="btn btn-secondary">بازگشت به لیست پست‌ها</a>
    </form>
</div>

@endsection

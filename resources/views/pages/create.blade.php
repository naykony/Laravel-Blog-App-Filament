@extends('app.Index')


@section('content')

<!-- Navbar -->
<!-- (navbar code here, same as in index.html) -->

<div class="container mt-5">
    <h2>ساخت پست جدید</h2>
    @if(session()->has('success'))
    <span style="color: green"> {!! session('success') !!} </span>
    @endif
    <form method="POST" action="{{ route('createpost') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">عنوان پست</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">محتوا</label>
            <textarea id="content" name="content" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">ایجاد پست</button>
    </form>
</div>


@endsection
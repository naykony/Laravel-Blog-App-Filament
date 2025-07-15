@extends('index')


@section('content')


<div class="container mt-5">
    <h2>ویرایش پست</h2>
    <form method="POST" action="update.html">
        <div class="mb-3">
            <label for="title" class="form-label">عنوان پست</label>
            <input type="text" id="title" name="title" class="form-control" value="عنوان قبلی" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">محتوا</label>
            <textarea id="content" name="content" class="form-control" rows="4" required>محتوای قبلی</textarea>
        </div>
        <button type="submit" class="btn btn-warning">بروزرسانی پست</button>
    </form>
</div>


@endsection
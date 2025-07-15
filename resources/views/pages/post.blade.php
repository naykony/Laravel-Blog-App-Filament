@extends('app.index')

@section('content')
    <div class="container mt-5">
        <h2>{{ $post->title }}</h2>  <!-- نمایش عنوان پست -->
        <p>{{ $post->content }}</p>  <!-- نمایش محتوای پست -->

        <!-- نمایش کامنت‌ها -->
        <div class="comments mt-4">
            <h4>کامنت‌ها:</h4>
            @foreach ($post->comments as $comment)
                <div>
                    <p><strong>{{ optional($comment->user)->name ?? 'کاربر ناشناس' }}</strong>: {{ $comment->comment }} (نمره: {{ $comment->rating }})</p>
                </div>
            @endforeach
        </div>

        <!-- نمایش خطا یا موفقیت -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- فرم ارسال کامنت و نمره تنها برای کاربران وارد شده -->
        @auth
        <div class="mt-4">
            <h4>نظر خود را بنویسید:</h4>
            <form action="{{ route('comments.store', $post->id) }}" method="POST">
                @csrf
                <textarea name="comment" rows="4" placeholder="نظر خود را بنویسید" required class="form-control"></textarea>

                <!-- انتخاب نمره -->
                <div class="mt-2">
                    <label for="rating">نمره:</label>
                    <select name="rating" id="rating" required class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-2">ارسال کامنت</button>
            </form>
        </div>
        @else
        <div class="mt-4">
            <p>لطفاً وارد حساب کاربری خود شوید تا بتوانید کامنت بگذارید.</p>
            <a href="{{ route('login') }}" class="btn btn-primary">ورود</a> <!-- لینک ورود -->
        </div>
        @endauth

        <a href="{{ route('blog') }}" class="btn btn-secondary mt-3">بازگشت به لیست پست‌ها</a>  <!-- لینک بازگشت -->
    </div>
@endsection

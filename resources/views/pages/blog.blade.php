@extends('app.Index')


@section('content')

<div class="container mt-5">
    <h2>لیست پست‌ها</h2>
    @foreach ($posts as $posts)
        
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{$posts->title}}</h5>
            <p class="card-text">این یک پست {{$posts->title}} است.</p>
            <a href="/post/{{$posts->id}}" class="btn btn-primary">مشاهده پست</a>
        </div>
    </div>
    @endforeach

    <!-- Repeat card for more posts -->
</div>

@endsection

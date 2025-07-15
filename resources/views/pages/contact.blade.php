@extends('app.Index')


@section('content')

<div class="container mt-5">
    <h2>تماس با ما</h2>
    @if(session()->has('success'))
    <span style="color: green"> {!! session('success') !!} </span>
    @endif
    <form action="{{ route('contactcrt') }}" method="POST">
         @csrf
        <div class="mb-3">
            <label for="name" class="form-label">نام شما</label>
            <input type="text" id="name" name="name" class="form-control" >
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">ایمیل شما</label>
            <input type="email" id="email" name="email" class="form-control" >
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">پیام شما</label>
            <textarea id="message" name="dec" class="form-control" rows="4" ></textarea>
            @error('dec')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">ارسال پیام</button>
    </form>
</div>

@endsection

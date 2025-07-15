<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Welcome to the Blog Application!</h1>
    <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
@endsection

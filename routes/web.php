<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CretpostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;

use App\Http\Con;


Route::get('/', function () {return view('pages.home');})->name('home');

Route::get('/about', function () {return view('pages.about');})->name('about');


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/post/{id}', [BlogController::class, 'show'])->name('post');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contactcrt');



Route::get('/create', [CretpostController::class, 'index'])->name('create');
Route::post('/create', [CretpostController::class, 'store'])->name('createpost');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login_page');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('reg_page');
Route::post('/register', [AuthController::class, 'register'])->name('reg');


Route::get('/prof', function () {return view('auth.prof');})->name('prof')->middleware('auth');
Route::post('/logout', function () {Auth::logout();return redirect()->route('home');})->name('logout');


Route::post('/post/{postId}/comment', [CommentController::class, 'store'])->name('comments.store');


Route::get('/delete', function () {
    return view('delete');
})->name('delete');

Route::get('/edit', function () {
    return view('edit');
})->name('edit');





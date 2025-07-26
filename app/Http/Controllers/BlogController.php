<?php

namespace App\Http\Controllers;

use App\Models\Crtpost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Crtpost::all(); // گرفتن همه پست‌ها

        return view('pages.blog', compact('posts')); // ارسال پست‌ها به ویو 'home'

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // پیدا کردن پست بر اساس id
        $post = Crtpost::with('comments.user')->find($id);

        // اگر پست پیدا نشد، نمایش خطای 404
        if (! $post) {
            abort(404);  // اگر پست پیدا نشد، خطای 404 نمایش داده می‌شود
        }

        // ارسال پست به ویو
        return view('pages.post', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Crtpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        // پیدا کردن پست
        $post = Crtpost::findOrFail($postId);

        // بررسی این که آیا کاربر قبلاً کامنت داده است
        $existingComment = Comment::where('crtpost_id', $postId)
                                  ->where('user_id', Auth::id())
                                  ->first();

        // اگر کامنت وجود داشته باشد، پیام خطا نمایش داده می‌شود
        if ($existingComment) {
            return back()->withErrors(['comment' => 'شما قبلاً برای این پست کامنت داده‌اید.']);
        }

        // اعتبارسنجی ورودی
        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5', // اعتبارسنجی نمره
        ]);

        // ذخیره کامنت جدید
        Comment::create([
            'comment' => $request->comment,
            'crtpost_id' => $postId,
            'user_id' => auth()->id(),
            'rating' => $request->rating, // ذخیره نمره
        ]);

        // بازگشت به صفحه پست
        return back()->with('success', 'کامنت شما با موفقیت ارسال شد.');
    }
}

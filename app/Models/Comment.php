<?php

// app/Models/Comment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment', 'crtpost_id', 'user_id', 'rating',
    ];

    // ارتباط با پست
    public function post()
    {
        return $this->belongsTo(Crtpost::class, 'crtpost_id');
    }

    // ارتباط با کاربر
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

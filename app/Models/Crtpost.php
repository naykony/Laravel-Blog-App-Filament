<?php

// app/Models/Crtpost.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crtpost extends Model
{
    protected $fillable = [
        'title',
        'content',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'crtpost_id');
    }
}

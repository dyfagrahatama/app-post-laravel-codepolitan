<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "post";

    protected $fillable = [
        'id', 'title', 'content', 'active'
    ];

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
    // Membuat function sendiri
    public function total_comments()
    {
        return $this->comments()->count();
    }

    //relasi ke database comment

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

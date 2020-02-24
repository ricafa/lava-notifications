<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 
        'title', 
        'body',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function qtdComentarios()
    {
        $count = $this->comments->count();
        if($count > 1)
            return "$count comentários";
        else
            return "$count comentário";
    }
}

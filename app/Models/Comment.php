<?php

namespace App\Models;
use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = "comments";
    
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function user()
{
    return $this->belongsTo(User::class);
}
}
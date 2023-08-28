<?php


namespace App\Models;
use App\Models\Article;
use App\Models\Comment;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = "users";

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

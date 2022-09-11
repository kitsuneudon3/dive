<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'comment',
        'post_id',
        'user_id',
    ];
    
    protected static function boot()
    {
        parent::boot();

        // 保存時user_idをログインユーザーに設定
        self::saving(function($post_comment) {
        $post_comment->user_id = \Auth::id();
        });
    }
 
    
     public function user()
    {
    return $this->belongsTo(User::class);
    }
    
     public function post()
    {
    return $this->belongsTo(Post::class);
    }
}

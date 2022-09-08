<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    
    
     protected $fillable = [
    'body',
    'user_id',
    'spot_id',
    'image',
    ];
    
    protected static function boot()
    {
        parent::boot();

        // 保存時user_idをログインユーザーに設定
        self::saving(function($stock) {
        $stock->user_id = \Auth::id();
        });
    }
    
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
    return $this::with('spot')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    
    //relation
    public function user()
    {
       return $this->belongsTo(User::class);
    }
    
    
    //いいね
    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    }


     public function spot()
    {
        return $this->belongsTo(Spot::class);
    }

     public function post_comments()
    {
        return $this->hasMany(Post_comment::class);
    }
   
}

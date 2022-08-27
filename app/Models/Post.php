<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
     protected $fillable = [
    'body',
    'user_id',
    'spot_id',
    'image'
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
       return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    
    public function user()
    {
       return $this->belongsTo(User::class);
    }
    
    public function likeUsers()
    {
        return $this->belongsToMany(User::class);
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

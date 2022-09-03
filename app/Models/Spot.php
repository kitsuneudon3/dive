<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
    
    public function getBySpot(int $limit_count = 5)
    {
     return $this->posts()->with('spot')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
     public function posts()
    {
    return $this->hasMany(Post::class);
    }
    
     public function logs()
    {
    return $this->hasMany(Log::class);
    }
}

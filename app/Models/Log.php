<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    
   
   public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    
    protected $fillable = [
        'user_id',
        'spot',
        'start_time',
        'end_time',
        'max_depth',
        'ave_depth',
        'start_air',
        'end_air',
        'memo',
        'member',
        'image',

];
    
    
    public function user()
    {
       return $this->belongsTo(User::class);
    }
    
}

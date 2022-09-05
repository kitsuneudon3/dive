<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{
    use HasFactory;
    use SoftDeletes;
   
   public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    
    protected $fillable = [
        'user_id',
        'date',
        'spot',
        'dive_point',
        'start_time',
        'end_time',
        'total_time',
        'max_depth',
        'ave_depth',
        'start_air',
        'end_air',
        'memo',
        'member',
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
    
    
    public function user()
    {
       return $this->belongsTo(User::class);
    }
    
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class LogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('logs')->insert([
        'user_id' => 1,
        'date' => '2022_08_08',
        'spot' => '富戸',
        'dive_point' => null,
        'start_time' => '10:00',
        'end_time' => '10:40',
        'total_time' => '40',
        'max_depth' => '18',
        'ave_depth' => '15',
        'start_air' => '180',
        'end_air' => '100',
        'memo' => '見れた魚：コブダイ、サンマ、ジンベエザメ', 
        'member' => '鈴木、佐藤、小林',
        'image' => 'wxGZjeZSbYjVhP5zwJNS',
        'deleted_at' => new DateTime(),
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);
    
        DB::table('logs')->insert([
        'user_id' => 1,
        'spot' => '波左間',
        'dive_point' => null,
        'date' => '2022_09_09',
        'start_time' => '10:00',
        'end_time' => '10:40',
        'total_time' => '40',
        'max_depth' => '18',
        'ave_depth' => '15',
        'start_air' => '180',
        'end_air' => '100',
        'memo' => '見れた魚：コブダイ、サンマ、ジンベエザメ', 
        'member' => '鈴木、佐藤、小林',
        'image' => 'wxGZjeZSbYjVhP5zwJNS',
        'deleted_at' => new DateTime(),
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);        
        DB::table('logs')->insert([
        'user_id' => 3,
        'spot' => '伊戸',
        'dive_point' => null,
        'date' => '2022_08_20',
        'start_time' => '10:00',
        'end_time' => '10:40',
        'total_time' => '40',
        'max_depth' => '18',
        'ave_depth' => '15',
        'start_air' => '180',
        'end_air' => '100',
        'memo' => '見れた魚：コブダイ、サンマ、ジンベエザメ', 
        'member' => '鈴木、佐藤、小林',
        'image' => 'wxGZjeZSbYjVhP5zwJNS',
        'deleted_at' => new DateTime(),
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);
    
    }
}

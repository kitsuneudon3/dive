<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('posts')->insert([
        'user_id' => 1,
        'spot_id' => 1,
        'body' => '楽しかったです！！',
        'image' =>'wxGZjeZSbYjVhP5zwJNS',
        'movie' =>'w7SAnrw3EnPaaaaaaaaaa',
        'deleted_at' => new DateTime(),
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);
    
        DB::table('posts')->insert([
        'user_id' => 2,
        'spot_id' => 3,
        'body' => '綺麗でした！！！',
        'image' =>'wxGZjeZSbYjVhP5zaaa',
        'movie' =>'w7SAnrw3EnPaaaaaaaaaa',
        'deleted_at' => new DateTime(),
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);
    
    DB::table('posts')->insert([
        'user_id' => 3,
        'spot_id' => 3,
        'body' => '楽しかったです！',
        'image' =>'wxGZjeZSbYjVhPiiiii',
        'movie' =>'w7SAnrw3EnPx2hiiiiii',
        'deleted_at' => new DateTime(),
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);
    }
}

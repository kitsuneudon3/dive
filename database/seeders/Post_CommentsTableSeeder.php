<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Post_CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('post_comments')->insert([
          'user_id' => 1,
          'post_id' => 1,
          'comment' => 'かわいい！',
          'deleted_at' => new DateTime(),
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
        
        DB::table('post_comments')->insert([
          'user_id' => 2,
          'post_id' => 1,
          'comment' => 'かわいい！',
          'deleted_at' => new DateTime(),
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
        
        DB::table('post_comments')->insert([
          'user_id' => 2,
          'post_id' => 3,
          'comment' => '綺麗ですね！！',
          'deleted_at' => new DateTime(),
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
        
    }
}

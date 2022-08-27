<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('likes')->insert([
        'user_id' => 1,
        'post_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);
    
         DB::table('likes')->insert([
        'user_id' => 2,
        'post_id' => 2,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);
    
         DB::table('likes')->insert([
        'user_id' => 3,
        'post_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);
    }
}

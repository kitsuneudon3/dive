<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('follows')->insert([
        'follow_id' => 1,
        'follower_id' => 2,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);
    
        DB::table('follows')->insert([
        'follow_id' => 2,
        'follower_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);    
       
       DB::table('follows')->insert([
        'follow_id' => 3,
        'follower_id' => 1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]); 
    }
}

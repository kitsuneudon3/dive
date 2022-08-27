<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SpotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spots')->insert([
         'name' => '富戸',
         'adress' =>'aaaaaaaaaaaaaaaaa',
         'created_at' => new DateTime(),
         'updated_at' => new DateTime(),
         ]);
         
         DB::table('spots')->insert([
         'name' => '波左間',
         'adress' =>'iiiiiiiiiiiiiiiii',
         'created_at' => new DateTime(),
         'updated_at' => new DateTime(),
         ]);
    
        DB::table('spots')->insert([
         'name' => '伊戸',
         'adress' =>'uuuuuuuuuuuuuuuuu',
         'created_at' => new DateTime(),
         'updated_at' => new DateTime(),
         ]);
    }
}

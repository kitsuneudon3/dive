<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'suzuki',
          'email' =>'aiu@gmail.com',
          'password' =>'w7SAnrw3EnPx2hLwc3XK',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
          'name' => 'suzuki',
          'email' =>'aiueo@gmail.com',
          'password' =>'w7SAnrw3EnPx2hLwc3ai',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);

        DB::table('users')->insert([
          'name' => 'sasaki',
          'email' =>'kakikukeko@gmail.com',
          'password' =>'w7SAnrw3EnPx2hLwc3kaki',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
       
    }
}

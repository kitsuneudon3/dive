<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @reSturn void
     */
    public function run()
    {
       $this->call([
        PostsTableSeeder::class,
        UsersTableSeeder::class,
        FollowsTableSeeder::class,
        LikesTableSeeder::class,
        LogsTableSeeder::class,
        Post_CommentsTableSeeder::class,
        SpotsTableSeeder::class,
        
        
       ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

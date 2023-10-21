<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Post::factory(10)->create();  // Without PostSeeder class
        $this->call([PostSeeder::class]); // With Seeder class for each factory
    }
}



// for factory => php artisan make:factory PostFactory --model=Post (by laravel convention => it will be for Post Model)
// for factory => php artisan make:seeder PostSeeder

// to run => php artisan db:seed

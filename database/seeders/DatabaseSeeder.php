<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Post::truncate();
        // User::truncate();
        // Category::truncate();

        User::factory(5)->create();
        Category::factory(5)->create();
        Post::factory(10)->create();
    }
}

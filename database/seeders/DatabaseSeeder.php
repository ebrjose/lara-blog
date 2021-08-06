<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Eber Coaquira',
            'username' => 'ebrjose',
            'email' => 'ebrjose@gmail.com',
            'password' => bcrypt('123123')
        ]);

        User::factory(5)->create();
        Category::factory(5)->create();
        Post::factory(20)->create();
        Comment::factory(20)->create();
    }
}

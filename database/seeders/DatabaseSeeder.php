<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        \App\Models\Category::factory(5)->create();
//        \App\Models\User::factory(10)->create();
//        $posts = \App\Models\Post::factory(1)->create();
//
//        foreach($posts as $post) {
//            $post->categories()->attach([rand(1,5), rand(1,5)]);
//        }

        User::create([
          'name' => 'Alex',
          'email' => 'kokov.alexander@gmail.com',
          'password' => 'alex2003',
          'is_admin' => true,
        ]);

        Post::create([

        ]);

    }
}

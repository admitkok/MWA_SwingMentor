<?php

namespace database\seeders;


use App\Models\User;
use App\Models\Mentor;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Mentor::factory(5)->create();
        \App\Models\User::factory(10)->create();
        $posts = \App\Models\Post::factory(10)->create();

        foreach($posts as $post) {
            $post->mentors()->attach([$post->author->mentor_id]);
        }

        User::create([
          'name' => 'Alex',
          'email' => 'kokov.alexander@gmail.com',
          'password' => 'alex2003',
          'is_admin' => true,

        ]);

    }
}

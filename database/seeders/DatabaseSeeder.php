<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(1000)->create();
        // factory(App\Post::class, 50)->create();
    }
}

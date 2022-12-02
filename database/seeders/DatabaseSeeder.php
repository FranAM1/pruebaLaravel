<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            CommentSeeder::class,
            PostSeeder::class,
            CommunitySeeder::class,
            UserSeeder::class,
            PerfilSeeder::class,
        ]);
    }
}

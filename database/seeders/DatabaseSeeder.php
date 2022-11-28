<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Perfil;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Perfil::factory(10)->create();

        $this->call([
            CommentSeeder::class,
            PostSeeder::class,
            CommunitySeeder::class,
        ]);
    }
}

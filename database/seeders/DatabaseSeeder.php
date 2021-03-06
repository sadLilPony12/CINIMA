<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\GenreSeeder;

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
            GenreSeeder::class,
            RoleSeeder::class,
            MovieSeeder::class,
            UserSeeder::class            
        ]);
    }
}

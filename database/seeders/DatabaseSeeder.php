<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (app()->environment('local', 'development')) {
            // Seeders para ambiente de desenvolvimento
            $this->call([
                UserSeeder::class,
                TypeSeeder::class,
                StatusSeeder::class,
                GenreSeeder::class,
                OldItemsSeeder::class,
            ]);
        } else {
            // Seeders para ambiente de produção
            $this->call([
                UserSeeder::class,
                TypeSeeder::class,
                StatusSeeder::class,
                GenreSeeder::class,
                OldItemsSeeder::class,
            ]);
        }
    }
}

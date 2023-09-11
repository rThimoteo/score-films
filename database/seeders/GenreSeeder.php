<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            [
                'name' => 'Ação',
                'handler' => 'acao'
            ],
            [
                'name' => 'Aventura',
                'handler' => 'aventura'
            ],
            [
                'name' => 'RPG',
                'handler' => 'rpg'
            ],
            [
                'name' => 'Romance',
                'handler' => 'romance'
            ],
            [
                'name' => 'Terror',
                'handler' => 'terror'
            ],
        ];

        foreach ($genres as $key => $genre) {
            Genre::firstOrCreate($genre);
        }
    }
}

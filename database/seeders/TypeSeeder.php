<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Filme',
                'handler' => Type::FILME
            ],
            [
                'name' => 'Série',
                'handler' => Type::SERIE
            ],
            [
                'name' => 'Anime',
                'handler' => Type::ANIME
            ],
            [
                'name' => 'Jogo',
                'handler' => Type::JOGO
            ],
            [
                'name' => 'Desenho',
                'handler' => Type::DESENHO
            ]
        ];

        foreach ($types as $key => $type) {
            Type::firstOrCreate($type);
        }
    }
}

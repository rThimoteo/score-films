<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::firstOrCreate([
            'name' => 'Sex Education',
            'description' => 'Uma série que fala de sexo.',
            'type_id' => Type::where('handler', 'serie')->first()->id
        ]);

        Item::firstOrCreate([
            'name' => 'Tales of Arise',
            'description' => 'Melhor jogo de anime.',
            'type_id' => Type::where('handler', 'game')->first()->id
        ]);

        Item::firstOrCreate([
            'name' => 'Rua do Medo: 1994 - Parte 1',
            'description' => 'Melhor filme do mundo, parte 1.',
            'type_id' => Type::where('handler', 'movie')->first()->id
        ]);

        Item::firstOrCreate([
            'name' => 'Grand Blue',
            'description' => 'Um dos animes de comédia já feitos',
            'type_id' => Type::where('handler', 'anime')->first()->id
        ]);
    }
}

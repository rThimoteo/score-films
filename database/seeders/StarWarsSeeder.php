<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Type;

class StarWarsSeeder extends Seeder
{
  public function run()
  {
    // Criação dos filmes
    $movies = [
      [
        'name' => 'Star Wars: Episode IV - A New Hope',
        'description' => 'A long time ago in a galaxy far, far away...',
        'parent_id' => -1,
        'type_id' => Type::where('handler', 'movie')->first()->id
      ],
      [
        'name' => 'Star Wars: Episode V - The Empire Strikes Back',
        'description' => 'The battle continues...',
        'type_id' => Type::where('handler', 'movie')->first()->id
      ],
      [
        'name' => 'Star Wars: Episode VI - Return of the Jedi',
        'description' => 'The saga reaches its epic conclusion...',
        'type_id' => Type::where('handler', 'movie')->first()->id
      ],
      [
        'name' => 'Star Wars: Episode I - The Phantom Menace',
        'description' => 'A new chapter begins...',
        'parent_id' => -1,
        'type_id' => Type::where('handler', 'movie')->first()->id
      ],
      [
        'name' => 'Star Wars: Episode II - Attack of the Clones',
        'description' => 'The clones are unleashed...',
        'type_id' => Type::where('handler', 'movie')->first()->id
      ],
      [
        'name' => 'Star Wars: Episode III - Revenge of the Sith',
        'description' => 'The dark side rises...',
        'type_id' => Type::where('handler', 'movie')->first()->id
      ],
      [
        'name' => 'Star Wars: Episode VII - The Force Awakens',
        'description' => 'A new generation of heroes...',
        'parent_id' => -1,
        'type_id' => Type::where('handler', 'movie')->first()->id
      ],
      [
        'name' => 'Star Wars: Episode VIII - The Last Jedi',
        'description' => 'The Jedi fight for survival...',
        'type_id' => Type::where('handler', 'movie')->first()->id
      ],
      [
        'name' => 'Star Wars: Episode IX - The Rise of Skywalker',
        'description' => 'The final battle begins...',
        'type_id' => Type::where('handler', 'movie')->first()->id
      ],
    ];


    // Inserção dos filmes na tabela

    $universeId = DB::table('universes')->insertGetId(['name' => 'Star Wars', 'created_at' => now(), 'updated_at' => now()]);

    foreach ($movies as $movie) {
      if (!isset($movie['parent_id'])) {
        $lastMovieId = DB::table('items')->orderByDesc('id')->value('id');
        $movie['parent_id'] = $lastMovieId;
      } else {
        $movie['parent_id'] = null;
      }

      $movie['universe_id'] = $universeId;
      $movie['created_at'] = now();
      $movie['updated_at'] = now();

      DB::table('items')->insert($movie);
    }
  }
}

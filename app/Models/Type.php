<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    const JOGO = 'game';
    const FILME = 'movie';
    const SERIE = 'serie';
    const ANIME = 'anime';
    const DESENHO = 'cartoon';

    public $timestamps = false;
}

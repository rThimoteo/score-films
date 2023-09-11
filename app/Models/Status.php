<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    const PRIORIDADE = 'priority';
    const CONCLUIDO = 'done';
    const LISTA = 'todo';
    const DROPADO = 'dropped';
    const CONSUMINDO = 'consuming';

    public $timestamps = false;
}

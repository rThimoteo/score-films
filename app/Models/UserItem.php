<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserItem extends Pivot
{
    protected $table = 'user_item';

    protected $fillable = [
        'score',
        'status_id',
        'comment',
        'is_favorite',
        'date',
        'actual_episode'
    ];

    protected $casts = [
        'is_favorite' => 'boolean',
        'date' => 'datetime',
    ];

    // Relacionamento com a tabela de status
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
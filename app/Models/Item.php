<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'description',
        'img_url',
        'banner_url',
        'type_id',
        'year'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'item_genres', 'item_id', 'genre_id');
    }
}

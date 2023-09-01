<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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
        return $this->belongsToMany(Genre::class, 'item_genre', 'item_id', 'genre_id')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_item')
            ->using(UserItem::class)
            ->withPivot('score', 'status_id', 'comment', 'is_favorite', 'date')
            ->withTimestamps();
    }
}

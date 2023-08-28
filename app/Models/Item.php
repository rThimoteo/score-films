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

    public function scopeUserScore(Builder $query): Builder
    {
        return $query->leftJoin('user_item', 'items.id', '=', 'user_item.item_id')
            ->leftJoin('statuses', 'user_item.status_id', '=', 'statuses.id')
            ->select('items.*', 'user_item.score', 'statuses.handler as status_handler', 'statuses.name as status_name')
            ->where('user_item.user_id', auth()->id())
            ->orWhereNull('user_item.user_id');
    }
}

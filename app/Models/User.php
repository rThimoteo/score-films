<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'name',
        'username',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'user_item')
            ->using(UserItem::class)
            ->withPivot('score', 'status_id', 'comment', 'is_favorite', 'date')
            ->withTimestamps();
    }
}

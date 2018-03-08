<?php

namespace App\Models;

class Shop extends Model
{
    public static function basicColunm()
    {
        return ['id', 'title'];
    }

    public function merchant()
    {
        return $this->belongsTo(Shop::class);
    }

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}

<?php

namespace App\Models;

class Item extends Model
{
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}

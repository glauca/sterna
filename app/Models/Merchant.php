<?php

namespace App\Models;

class Merchant extends Model
{
    public function shop()
    {
        return $this->hasOne(Shop::class);
    }
}

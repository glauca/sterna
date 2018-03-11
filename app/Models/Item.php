<?php

namespace App\Models;

class Item extends Model
{
    const STATUS_DRAFT   = 1; // 草稿
    const STATUS_ONLINE  = 2; // 在售
    const STATUS_LOCKED  = 3; // 锁定 如 做活动预售
    const STATUS_OFFLINE = 4; // 下架

    public static function basicColumn()
    {
        return ['id', 'shop_id', 'category_id', 'brand_id', 'title', 'price', 'origin_price', 'stock', 'weight', 'free_freight', 'freight_id', 'status'];
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}

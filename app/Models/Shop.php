<?php

namespace App\Models;

class Shop extends Model
{
    const STATUS_APPLYING = 1; // 申请
    const STATUS_OPEN     = 2; // 营业
    const STATUS_CLOSED   = 3; // 关闭
    const STATUS_REJECTED = 4; // 拒绝

    public static function basicColumn()
    {
        return ['id', 'title', 'icon', 'cover', 'fans'];
    }

    public function merchant()
    {
        return $this->belongsTo(Shop::class);
    }

    public function licence()
    {
        return $this->hasMany(ShopLicence::class);
    }

    public function businessLicence()
    {
        return $this->licence()->where('type', ShopLicence::BUSINESS_LICENCE);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('店铺名称');
            $table->string('icon')->comment('店铺图标');
            $table->string('cover')->comment('店铺背景大图');
            $table->string('summary')->comment('店铺简介');
            $table->unsignedTinyInteger('type')->comment('店铺类型 个人|企业');
            $table->unsignedTinyInteger('level')->comment('店铺等级');
            $table->unsignedMediumInteger('province_id')->comment('店铺省份');
            $table->unsignedMediumInteger('city_id')->comment('店铺市区');
            $table->string('address')->comment('店铺地址');
            $table->string('phone', 11)->comment('店铺联系电话');
            $table->string('business_licence')->comment('营业执照');
            $table->string('food_licence')->comment('食品经营许可证');
            $table->unsignedTinyInteger('status')->comment('店铺状态');
            $table->dateTime('requested_at')->comment('店铺申请时间');
            $table->dateTime('opened_at')->comment('店铺开店时间');
            $table->dateTime('closed_at')->comment('店铺关闭时间');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}

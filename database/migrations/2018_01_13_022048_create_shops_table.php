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
            $table->unsignedInteger('merchant_id')->nullable();
            $table->string('title');
            $table->string('icon')->comment('店标');
            $table->string('cover')->comment('背景大图');
            $table->string('summary')->comment('简介');
            $table->tinyInteger('type')->default(1)->comment('类型 个人|企业');
            $table->tinyInteger('level')->default(0)->comment('等级');
            $table->unsignedInteger('fans')->default(0)->comment('粉丝数');
            $table->mediumInteger('province_id')->nullable()->comment('省份');
            $table->mediumInteger('city_id')->nullable()->comment('市区');
            $table->string('address')->comment('地址');
            $table->string('phone', 11)->comment('联系电话');
            $table->tinyInteger('status')->default(1)->comment('状态');
            $table->dateTime('requested_at')->nullable()->comment('申请时间');
            $table->dateTime('opened_at')->nullable()->comment('开店时间');
            $table->dateTime('closed_at')->nullable()->comment('关闭时间');
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

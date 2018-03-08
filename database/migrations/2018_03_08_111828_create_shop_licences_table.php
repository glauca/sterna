<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopLicencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_licences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('shop_id')->nullable();
            $table->tinyInteger('type')->default(1); // 1 营业执照 2 商品经营许可证
            $table->string('licence')->comment('执照照片');
            $table->tinyInteger('status')->default(1)->comment('状态');
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
        Schema::dropIfExists('shop_licences');
    }
}

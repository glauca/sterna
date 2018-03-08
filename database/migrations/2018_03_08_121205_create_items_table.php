<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('shop_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('brand_id')->nullable();
            $table->string('title')->default(0);
            $table->decimal('price')->default(0);
            $table->decimal('origin_price')->default(0);
            $table->unsignedInteger('stock')->default(0);
            $table->unsignedInteger('weight')->default(0);
            $table->enum('free_freight', [0, 1])->default(0);
            $table->unsignedInteger('freight_id')->nullable(); // 运费
            $table->text('content');
            $table->string('sales')->comment('总销量')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}

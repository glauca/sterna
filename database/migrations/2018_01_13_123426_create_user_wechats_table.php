<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWechatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_wechats', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('openid')->unique();
            $table->string('avatar');
            $table->timestamps();

            $table->primary('openid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_wechats');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StorageUserLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storage_user_links', function (Blueprint $table) {
            // 创建表结构
            $table->increments('id');
            $table->string('user_id', 255)->comment('用户ID');
            $table->string('storage_id', 255)->comment('储存id');
            $table->timestamps();
            $table->softDeletes();
            // 设置表引擎
            $table->engine = 'InnoDB';
            // 建立索引
            $table->index('user_id');
            $table->index('storage_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storage_user_links');
    }
}

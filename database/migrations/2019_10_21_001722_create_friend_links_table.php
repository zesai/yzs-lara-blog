<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend_links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('url')->nullable()->comment('链接地址');
            $table->string('name')->nullable()->comment('名称');
            $table->string('description')->comment('描述');
            $table->enum('audit', [0,1])->index()->comment('审核是否通过 0未审核未通过 1是通过 默认0');
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
        Schema::dropIfExists('friend_links');
    }
}

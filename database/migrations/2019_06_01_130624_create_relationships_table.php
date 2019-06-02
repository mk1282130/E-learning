<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationships', function (Blueprint $table) {
            $table->unsignedInteger('follower_id');
            // unsignedInteger=整数
            // 整数(integer)を符号無し(unsigned)にする
            $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('followed_id');
            $table->foreign('followed_id')->references('id')->on('users')->onDelete('cascade');
            $table->unique(['follower_id', 'followed_id']);
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
        Schema::table('relationships', function (Blueprint $table){
        // Blueprint=クロージャ：名前を持たない関数？？
            $table->dropForeign(['follower_id']);
        });
        Schema::table('relationships', function (Blueprint $table){
            $table->dropForeign(['followed_id']);
        });
        Schema::dropIfExists('relationships');
    }
}

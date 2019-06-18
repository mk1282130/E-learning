<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            // unique：重複しないように
            $table->timestamp('email_verified_at')->nullable();
            $table->string('avatar')->default('default.jpg');
            // $table->string('image_url');
            $table->string('password')->nullable();
            // SNSログイン用にnullableでnullをOKにする
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('is_admin')->default(false);
            // カラムにNULL値を許す=>falseでNULL値を許さない
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

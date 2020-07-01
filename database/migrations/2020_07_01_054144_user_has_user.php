<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserHasUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_user', function (Blueprint $table) {
            $table->biginteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->biginteger('friend')->unsigned();
            $table->foreign('friend')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_user');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->integer('price');
            $table->string('owner');
            $table->string('city');
            $table->string('township');
            $table->string('street');
            $table->string('btype');
            $table->string('ptype');
            $table->string('bedroom');
            $table->string('aircon');
            $table->string('area');
            $table->string('floor');
            $table->string('others');
            $table->string('action');
            $table->integer('active');
            $table->integer('disbale');
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
        Schema::dropIfExists('posts');
    }
}

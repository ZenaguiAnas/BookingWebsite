<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villas', function (Blueprint $table) {
            $table->increments('id');
            // $table->unsignedInteger('user_id')->unique();
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->unsignedInteger('article_id')->unique();
            // $table->foreign('article_id')->references('id')->on('articles');
            $table->string('dest');
            $table->string('adult');
            $table->string('children');
            // $table->string('photo');
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
        Schema::dropIfExists('villas');
    }
}

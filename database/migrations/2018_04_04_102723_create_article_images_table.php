<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('articles_id')->index();
            $table->unsignedInteger('image_articles_id')->index();
            $table->engine = 'InnoDB';
        });

        Schema::table('article_images', function($table){
            $table->foreign('articles_id')->references('id')->on('articles');
            $table->foreign('image_articles_id')->references('id')->on('image_articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_images');
    }
}

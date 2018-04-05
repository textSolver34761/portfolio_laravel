<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('articles_id')->index();
            $table->unsignedInteger('images_project_id')->index();
            $table->engine = 'InnoDB';
        });

        Schema::table('articles_images', function($table){
            $table->foreign('articles_id')->references('id')->on('articles');
            $table->foreign('images_project_id')->references('id')->on('images_project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_images');
    }
}

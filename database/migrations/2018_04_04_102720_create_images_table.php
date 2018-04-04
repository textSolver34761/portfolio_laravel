<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->integer('height');
            $table->string('type');
            $table->binary('url');
            $table->unsignedInteger('users_id')->index();
            $table->unsignedInteger('projects_id')->index();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });
        
        Schema::table('images', function($table){
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('projects_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('projects_id')->index();
            $table->unsignedInteger('tags_id')->index();
            $table->engine = 'InnoDB';
        });

        Schema::table('projects_tags', function($table){            
            $table->foreign('projects_id')->references('id')->on('projects');
            $table->foreign('tags_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_tags');
    }
}

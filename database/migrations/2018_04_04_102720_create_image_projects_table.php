<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('url');
            $table->unsignedInteger('projects_id')->index();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });
        
        Schema::table('image_projects', function($table){
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
        Schema::dropIfExists('image_projects');
    }
}

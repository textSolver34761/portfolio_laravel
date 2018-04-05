<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_users', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('url');
            $table->unsignedInteger('users_id')->index();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });
        
        Schema::table('images_users', function($table){
            $table->foreign('users_id')->references('id')->on('users');
        });
    }
}

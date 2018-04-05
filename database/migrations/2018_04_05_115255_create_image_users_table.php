<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_users', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('url');
            $table->unsignedInteger('users_id')->index();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });
        
        Schema::table('image_users', function($table){
            $table->foreign('users_id')->references('id')->on('users');
        });
    }
}

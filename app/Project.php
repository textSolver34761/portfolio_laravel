<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function tag(){
        return $this->hasMany('App\Tag');
    }

    public function image(){
        return $this->hasMany('App\Image');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function image(){
        return $this->hasMany('App\Image');
    }

    public function tag(){
        return $this->hasMany('App\Tag');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}

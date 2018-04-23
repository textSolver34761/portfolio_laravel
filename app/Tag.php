<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function article(){
        return $this->belongsToMany('App\Article')->using('App\ArticleTag');
    }

    public function project(){
        return $this->belongsToMany('App\Project')->using('App\ProjectTag');
    }
}

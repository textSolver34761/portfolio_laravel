<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public function tag(){
        return $this->belongsToMany('App\Tag')->using('App\ArticleTag');
    }

}

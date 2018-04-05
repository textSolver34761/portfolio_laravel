<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    public function article(){
        return $this->belongsTo('App\Article');
    }

    public function tag(){
        return $this->belongsTo('App\Tag');
    }
}

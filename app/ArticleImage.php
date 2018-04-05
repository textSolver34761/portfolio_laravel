<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    public function imagearticle(){
        return $this->belongsTo('App\ImageArticle');
    }

    public function article(){
        return $this->belongsTo('App\Article');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageArticle extends Model
{

    public function articeimage(){
        return $this->belongsTo('App\ArticleImage');
    }

}

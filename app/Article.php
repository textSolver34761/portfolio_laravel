<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function articletag(){
        return $this->belongsTo('App\ArticleTag');
    }

    public function articleimage(){
        return $this->belongsTo('App\ArticleImage');
    }
}

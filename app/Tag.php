<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function articletag(){
        return $this->belongsTo('App\ArticleTag');
    }

    public function projecttag(){
        return $this->hasMany('App\ProjectTag');
    }
}

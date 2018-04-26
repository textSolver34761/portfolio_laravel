<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function articles(){
        return $this->belongsToMany('App\Article', 'article_tag', 'tags_id', 'articles_id');
    }

    public function projects(){
        return $this->belongsToMany('App\Project','project_tag','tags_id','projects_id');
    }
}

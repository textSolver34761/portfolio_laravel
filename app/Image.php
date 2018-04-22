<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    public function articeimage(){
        return $this->belongsTo('App\ArticleImage');
    }

}

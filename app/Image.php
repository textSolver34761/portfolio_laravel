<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function project(){
        return $this->hasMany('App\Project');
    }

    public function article(){
        return $this->hasMany('App\Article');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function article(){
        return $this->hasMany('App\Article');
    }

    public function project(){
        return $this->hasMany('App\Project');
    }
}

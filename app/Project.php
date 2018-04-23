<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function tag(){
        return $this->belongsToMany('App\Tag')->using('App\ProjectTag');
    }

}

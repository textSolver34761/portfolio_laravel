<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model
{
    public function tag(){
        return $this->belongsTo('App\Tag');
    }

    public function project(){
        return $this->belongsTo('App\Project');
    }
}

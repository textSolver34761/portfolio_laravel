<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function tags(){
        return $this->belongsToMany('App\Tag','project_tag','projects_id','tags_id');        
    }

}

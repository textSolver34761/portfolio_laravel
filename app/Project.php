<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function tags(){
        return $this->belongsToMany('App\Tag','project_tag','projects_id','tags_id');        
    }

    public function images(){
        return $this->belongsToMany('App\Image','image_project','projects_id','images_id');        
    }

}

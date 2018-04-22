<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function projecttag(){
        return $this->belongsTo('App\ProjectTag');
    }
    
}

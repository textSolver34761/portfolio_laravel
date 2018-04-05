<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageUser extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

}

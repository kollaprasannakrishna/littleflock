<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function members(){
        return $this->belongsToMany('App\Member');
    }
}

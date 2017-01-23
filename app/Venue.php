<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public function post(){
        return $this->belongsTo('App\Sermon');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function stores(){
        return $this->belongsTo('App\Store');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card_Banner extends Model
{
    protected $table = 'cards_banners';

    public function stores(){
        return $this->belongsToMany('App\Store', 'payments__methods');
    }
}

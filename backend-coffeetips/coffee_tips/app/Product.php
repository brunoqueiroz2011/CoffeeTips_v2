<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'store_id',
        'category_id',
        'description',
        'price',
    ];

    public function stores(){
        return $this->belongsTo('App\Store');
    }

    public function categories(){
        return $this->belongsTo('App\Category');
    }
}

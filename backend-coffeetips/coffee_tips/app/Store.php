<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Store extends Model
{
    protected $guard = 'admin';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'description',
        'neighborhood',
        'number',
        'city',
        'state',
        'cep',
        'country',
        'street',
        'schedule',
        'DDD1',
        'telephone',
        'DDD2',
        'cellphone',
        'instagram',
        'facebook',
        'logo',
        'firdt_img_local',
        'second_img_local',
        'third_img_local',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function events(){
        return $this->hasMany('App\Event');
    }

    public function cards_banners(){
        return $this->belongsToMany('App\Card_Banner', 'payments__methods');
    }
}

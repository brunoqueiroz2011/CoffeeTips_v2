<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Store extends Authenticatable
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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

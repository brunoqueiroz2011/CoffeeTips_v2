<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
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
}

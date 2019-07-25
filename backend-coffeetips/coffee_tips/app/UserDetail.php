<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserDetail extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'cpf',
        'cep',
        'birth_date'
    ];

    public function userType(){
        return $this->hasOne('App\User');
    }
}

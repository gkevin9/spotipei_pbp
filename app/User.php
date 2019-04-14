<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'user_id';
    public $incrementing = false;

    public function playlist(){
        return $this->hasMany('App\Playlist');
    }

    public function history(){
        return $this->hasMany('App\History');
    }

    public function device(){
        return $this->hasMany('App\Device');
    }

    public function feedback(){
        return $this->hasMany('App\Feedback');
    }

    public function payment_history(){
        return $this->hasMany('App\Payment_History');
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'member_stat'
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

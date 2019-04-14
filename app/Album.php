<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'Album';
    protected $primaryKey = 'album_id';
    public $incrementing = false;

    public function song(){
    	return $this->hasMany('App\Song');
    }

    public function artist(){
    	return $this->belongsTo('App\Artist');
    }
}

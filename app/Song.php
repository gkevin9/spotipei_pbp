<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = 'Song';
    protected $primaryKey = 'song_id';
    public $incrementing = false;

    public function playlist(){
    	return $this->belongsToMany('App\Playlist');
    }

    public function album(){
    	return $this->belongsTo('App\Album');
    }

    public function artist(){
    	return $this->belongsTo('App\Artist');
    }

    public function genre(){
    	return $this->belongsTo('App\Genre');
    }
}

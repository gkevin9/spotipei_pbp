<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'Playlist';
    protected $primaryKey = 'playlist_id';
    public $incrementing = false;
    protected $fillable = ['playlist_name'];

    public function song(){
    	return $this->belongsToMany('App\Song');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}

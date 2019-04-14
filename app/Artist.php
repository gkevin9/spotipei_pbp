<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'Artist';
    protected $primaryKey = 'artist_id'; // or null
    public $incrementing = false;

    public function album(){
    	$this->hasMany('App\Album');
    }
}

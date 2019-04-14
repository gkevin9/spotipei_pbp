<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'Genre';
    protected $primaryKey = 'genre_id';
    public $incrementing = false;

    public function song(){
    	return $this->hasMany('App\Song');
    }
}

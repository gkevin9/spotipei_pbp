<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'History';
    protected $primaryKey = 'history_id';
    public $incrementing = false;

    public function song(){
    	return $this->belongsToMany('App\Song');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}

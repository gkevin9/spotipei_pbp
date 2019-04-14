<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'Feedback';
    protected $primaryKey = 'feedback_id';
    public $incrementing = false;
	protected $fillable = ['comment'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}

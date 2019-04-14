<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_History extends Model
{
    protected $table = 'Payment_History';
    protected $primaryKey = 'payment_history_id';
    public $incrementing = false;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';
    public function booking(){
    	return @$this->belongsTo('App\Models\Booking','booking_id');
    }
}

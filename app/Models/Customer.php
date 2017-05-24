<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	// protected $table = 'customers';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
			'user_id',
	];
	//ikhsan
	public function user(){
		return $this->belongsTo('App\User','user_id');
	}
	//lina
    public function booking(){
    	return @$this->belongsTo('App\Models\Booking','booking_id');
    }
}

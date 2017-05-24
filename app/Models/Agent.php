<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
  protected $table = 'agents';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'user_id',
  ];

    public function paket(){
    	return $this->belongsTo('App\Models\Paket','id','agents_id');
    }
}

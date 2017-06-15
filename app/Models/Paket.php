<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    public function agents(){
    	return $this->belongsTo('App\Models\Agents','agents_id','id');
    }
    public function adventures(){
    	return @$this->belongsTo('App\Models\Adventures','adv_id','adv_id');
    }
    public function paket_foto(){
    	return @$this->hasMany('App\Models\PaketFoto','id','paket_foto_id');
    }
    public function inf_lokasi(){
    	return@$this->belongsTo('App\Models\Inf_lokasi','lokasi_id','lokasi_ID');
    }
    public function schedule(){
        return @$this->belongsTo('App\Models\Schedule','schedule_id');
    }

}

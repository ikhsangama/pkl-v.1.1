<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
      // dd("sini");
    // protected $table = 'customers';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'ver_token', 'level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
      if($this->level == '0') {
          return true;
              return false;
      }
    }

    public function isCustomer()
    {
      if($this->level == '1') {
          return true;
              return false;
      }
    }

    public function isAgent()
    {
      if($this->level == '2') {
          return true;
              return false;
      }
    }
    //RELATION
    //ikhsan
    public function customer(){
      return $this->hasOne('App\Models\Customer','user_id');
    }
}

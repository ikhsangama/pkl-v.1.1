<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
      // dd("sini");
    protected $table = 'customers';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'ver_token',
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

    public function isLengkap()
    {
      if($this->null(gender)) {
          return true;
              return false;
      }
    }
}

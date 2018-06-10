<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use SoftDeletes;
    protected $user;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'email', 'password','city', 'country', 'type','occupation',
        'deleted_at', 'file', 'verified', 'email_token' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function __construct($user){

        $this->user = $user;
                }
   public function need()
    {
        return $this->hasOne('App\Need');
    }
  
}

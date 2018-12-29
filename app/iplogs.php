<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
class iplogs extends Model
{
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // use SoftDeletes;

    //protected $dates = ['deleted_at'];
    protected $fillable = [
        'logged_in', 'ipaddress', 'refer', 'user_id'
    ];
}

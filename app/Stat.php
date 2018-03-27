<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
   

    protected $dates = ['deleted_at'];
    protected $table='stat';
    protected $fillable = [
        'user_id','count', 'category', 'country' 
    ];

}

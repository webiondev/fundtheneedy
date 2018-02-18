<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Need extends Model
{

    protected $table='need';
    protected $fillable = [
    'description', 'category', 'deadline','verify', 'file', 'user_id' 
    ];

   
}

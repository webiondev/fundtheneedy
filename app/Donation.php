<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Donation extends Model
{


    protected $table='donation';
    protected $fillable = [
    'donated_by', 'donated_from', 'date','amount', 'quantity', 'created_at' 
    ];

   
}
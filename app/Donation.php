<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Donation extends Model
{


    protected $table='donation';
    protected $fillable = [
    'donated_by', 'donated_for','need_id', 'date','amount', 'quantity','file', 'created_at' 
    ];

   
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Message extends Model
{


    protected $table='message';
    protected $fillable = [
    'from', 'to_', 'message','date','message_root', 'status','created_at' 
    ];

   
}
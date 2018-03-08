<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Message extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $table='message';
    protected $fillable = [
    'from', 'to_', 'message','date','message_root', 'status','need_id','created_at' 
    ];

   
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Message extends Model
{

	use SoftDeletes;
	use Searchable;

	protected $dates = ['deleted_at'];
    protected $table='message';
    protected $fillable = [
    'from', 'to_', 'message','date','message_root', 'status','need_id','created_at' 
    ];

   
}
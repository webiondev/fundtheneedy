<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Donation extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $table='donation';
    protected $fillable = [
    'donated_by', 'donated_for','need_id', 'date','amount', 'quantity','file', 'created_at' 
    ];

   
}
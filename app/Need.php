<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Need extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $table='need';
    protected $fillable = [
    'description', 'category', 'deadline','verify','medium','amount','goods', 'file', 'user_id' 
    ];

   
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Need extends Model
{
	use SoftDeletes;
	use Searchable;

	protected $dates = ['deleted_at'];
    protected $table='need';
    protected $fillable = [
    'description', 'category', 'deadline','verify','medium','amount','currency','goods', 'file', 'user_id' 
    ];

   
}

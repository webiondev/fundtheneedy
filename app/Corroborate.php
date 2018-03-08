<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Corroborate extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $table='corroborate';
    protected $fillable = [
        'corroborate_by', 'corroborate_for', 'date', 'need_id'
    ];


}
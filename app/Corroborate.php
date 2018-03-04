<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Corroborate extends Model
{


    protected $table='corroborate';
    protected $fillable = [
        'corroborate_by', 'corroborate_for', 'date', 'need_id'
    ];


}
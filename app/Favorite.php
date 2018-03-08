<?php
/**
 * Created by PhpStorm.
 * User: rahma
 * Date: 3/5/2018
 * Time: 10:59 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Favorite extends Model
{


	use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $table='favorite';
    protected $softDelete = true;
    protected $fillable = [
        'favorite_to', 'isfavorite','need_id', 'created_at'
    ];


}
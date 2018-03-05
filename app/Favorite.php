<?php
/**
 * Created by PhpStorm.
 * User: rahma
 * Date: 3/5/2018
 * Time: 10:59 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
class Favorite extends Model
{


    protected $table='favorite';
    protected $fillable = [
        'favorite_to', 'isfavorite','need_id', 'created_at'
    ];


}
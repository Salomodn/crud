<?php
/**
 * Created by IntelliJ IDEA.
 * User: salomodn
 * Date: 27/08/19
 * Time: 17:22
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_number'];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'order_details', 'order_id', 'product_id')->withTimestamps();
    }
}

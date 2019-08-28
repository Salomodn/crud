<?php
/**
 * Created by IntelliJ IDEA.
 * User: salomodn
 * Date: 27/08/19
 * Time: 17:23
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'quantity'];

    public function orders()
    {
        return $this->belongsToMany('App\Order', 'order_details', 'product_id', 'order_id')->withTimestamps();
    }

    public function suppliers()
    {
        return $this->belongsToMany('App\Supplier', 'supplier_products', 'supply_id', 'product_id')->withTimestamps();
    }
}

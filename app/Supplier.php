<?php
/**
 * Created by IntelliJ IDEA.
 * User: salomodn
 * Date: 27/08/19
 * Time: 17:24
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['name'];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'supplier_products', 'product_id', 'supply_id')->withTimestamps();
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: CHISTAMA
 * Date: 21/11/2016
 * Time: 10:38 PM
 */

namespace app\Core\Order_item;


use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    protected $table = 'order_items';

    protected $fillable = ['price', 'quantity', 'product_id', 'order_id'];
    public function order()
    {
        return $this->belongsTo('App\Core\Order\Order');
    }

    public function product()
    {
        return $this->belongsTo('App\Core\Product\Product');
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: CHISTAMA
 * Date: 21/11/2016
 * Time: 10:36 PM
 */

namespace App\Core\Order;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'orders';

    protected $fillable = ['subtotal', 'shipping', 'user_id'];

    // Relation with User
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function order_items()
    {
        return $this->hasMany('App\OrderItem');
    }
}
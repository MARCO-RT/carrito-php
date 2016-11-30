<?php

namespace App\Core\Product;
use App\Core\Category\Category;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $table = 'products';

    protected $fillable = ['category_id','code','name', 'slug', 'image', 'price', 'stock' ,'description', 'estado' ];


    // Relation with Category
    public function category()
    {
        return $this->belongsTo('App\Core\Category\Category');
    }

    // Relation with OrderItem
    public function order_item()
    {
        return $this->hasOne('App\OrderItem');
    }
}

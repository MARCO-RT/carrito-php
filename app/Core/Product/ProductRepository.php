<?php
/**
 * Created by PhpStorm.
 * User: CHISTAMA
 * Date: 07/11/2016
 * Time: 10:08 AM
 */

namespace App\Core\Product;
use App\Core\Contracts\BaseRepositoryInterface;
use DB;

class ProductRepository implements BaseRepositoryInterface
{


    /**
     * @return mixed
     */
    public function all()
    {
        return Product::all();
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }

    /**
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function updated($id, array $attributes)
    {
        // TODO: Implement updated() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        // TODO: Implement find() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleted($id)
    {
        // TODO: Implement deleted() method.
    }

    public function getProductsByCategoryId($slug)
    {
        $resultado = Product::whereHas('category', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->paginate(6);
        return $resultado;
    }
}
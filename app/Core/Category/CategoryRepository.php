<?php

namespace App\Core\Category;
use DB;
use \App\Core\Contracts\BaseRepositoryInterface ;

/**
 * Created by PhpStorm.
 * User: CHISTAMA
 * Date: 07/11/2016
 * Time: 10:02 AM
 */
class CategoryRepository implements BaseRepositoryInterface
{


    public function all()
    {
        return Category::all();
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
}
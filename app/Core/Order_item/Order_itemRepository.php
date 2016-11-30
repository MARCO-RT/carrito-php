<?php
/**
 * Created by PhpStorm.
 * User: CHISTAMA
 * Date: 21/11/2016
 * Time: 10:39 PM
 */

namespace app\Core\Order_item;


use App\Core\Contracts\BaseRepositoryInterface;

class Order_itemRepository implements BaseRepositoryInterface
{

    /**
     * @return mixed
     */
    public function all()
    {
        // TODO: Implement all() method.
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
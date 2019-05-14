<?php

namespace TargetApi\Resource\PriceLists;

use TargetApi\Model\PriceLists\CarsPricelist as CarsPricelistModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class CarsPricelists extends AbstaractResource
{
    /**
     * @param CarsPricelistModel $model
     *
     * @return object|string
     */
    public function post(CarsPricelistModel $model)
    {
        return $this->call('post', [], $model);
    }

    /**
     * @return object|string
     */
    public function get()
    {
        return $this->call('get');
    }
}

<?php

namespace TargetApi\Resource\PriceLists;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class PricelistImportErrors extends AbstaractResource
{
    /**
     * @param null|int $pricelistIdOne
     * @param null|int $pricelistIdTwo
     *
     * @return object|string
     */
    public function get(int $pricelistIdOne = null, int $pricelistIdTwo = null)
    {
        return $this->call('get', [
            'pricelistIdOne' => $pricelistIdOne,
            'pricelistIdTwo' => $pricelistIdTwo,
        ]);
    }
}

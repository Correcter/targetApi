<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\URL as URLModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class CreateUrl extends AbstaractResource
{
    /**
     * @param URLModel $model
     *
     * @return object|string
     */
    public function post(URLModel $model)
    {
        return $this->call('post', [], $model);
    }
}

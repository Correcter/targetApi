<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Packages extends AbstaractResource
{
    /**
     * @return object|\TargetApi\Resource\string
     */
    public function get()
    {
        return $this->call('get');
    }
}

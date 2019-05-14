<?php

namespace TargetApi\Resource\Handbooks;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class MobileVendors extends AbstaractResource
{
    /**
     * @return object|string
     */
    public function get()
    {
        return $this->call('get');
    }
}

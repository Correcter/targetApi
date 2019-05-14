<?php

namespace TargetApi\Resource\Handbooks;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class MobileOperationSystem extends AbstaractResource
{
    /**
     * @return object|string
     */
    public function get()
    {
        return $this->call('get');
    }
}

<?php

namespace TargetApi\Resource\Users;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class BranchClientsCount extends AbstaractResource
{
    /**
     * @return object|string
     */
    public function get()
    {
        return $this->call('get');
    }
}

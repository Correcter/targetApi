<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class DmpProviders extends AbstaractResource
{
    public function get()
    {
        return $this->call('get');
    }
}

<?php

namespace TargetApi\Resource\Finance;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class TransactionGroups extends AbstaractResource
{
    public function get() {
        return $this->call('get');
    }
}

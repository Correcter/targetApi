<?php

namespace TargetApi\Resource\Users;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class ReservedAmounts extends AbstaractResource
{
    /**
     * @param null|int $userIdOne
     * @param null|int $userIdTwo
     *
     * @return object|string
     */
    public function get(int $userIdOne = null, int $userIdTwo = null)
    {
        return $this->call('get', [
            'userIdOne' => $userIdOne,
            'userIdTwo' => $userIdTwo,
        ]);
    }
}

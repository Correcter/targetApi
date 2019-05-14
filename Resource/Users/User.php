<?php

namespace TargetApi\Resource\Users;

use TargetApi\Model\Users\User as UserModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class User extends AbstaractResource
{
    /**
     * @return object|string
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param UserModel $model
     *
     * @return object|string
     */
    public function post(UserModel $model)
    {
        return $this->call('post', [], $model);
    }
}

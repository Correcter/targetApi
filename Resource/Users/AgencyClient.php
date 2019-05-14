<?php

namespace TargetApi\Resource\Users;

use TargetApi\Model\Users\AgencyClient as AgencyClientModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class AgencyClient extends AbstaractResource
{
    /**
     * @param null|int          $id
     * @param AgencyClientModel $model
     *
     * @return object|string
     */
    public function post(int $id = null, AgencyClientModel $model)
    {
        return $this->call('post', [
            'id' => $id,
        ], $model);
    }

    /**
     * @param int $id
     *
     * @return object|string
     */
    public function delete(int $id = null)
    {
        return $this->call('delete', [
            'id' => $id,
        ]);
    }
}

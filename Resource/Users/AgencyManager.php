<?php

namespace TargetApi\Resource\Users;

use TargetApi\Model\Users\AgencyManager as AgencyManagerModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class AgencyManager extends AbstaractResource
{
    /**
     * @param int                $managerId
     * @param AgencyManagerModel $model
     *
     * @return object|string
     */
    public function post(int $managerId, AgencyManagerModel $model)
    {
        return $this->call('post', [
            'manager_id' => $managerId,
        ], $model);
    }

    /**
     * @param int $managerId
     *
     * @return object|string
     */
    public function delete(int $managerId)
    {
        return $this->call('delete', [
            'manager_id' => $managerId,
        ]);
    }
}

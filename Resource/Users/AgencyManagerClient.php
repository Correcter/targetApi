<?php

namespace TargetApi\Resource\Users;

use TargetApi\Model\Users\AgencyManagerClient as AgencyManagerClientModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class AgencyManagerClient extends AbstaractResource
{
    /**
     * @param int|null $managerId
     * @param int|null $clientId
     * @param AgencyManagerClientModel $model
     * @return object|string
     */
    public function post(int $managerId = null, int $clientId = null, AgencyManagerClientModel $model)
    {
        return $this->call('post', [
            'manager_id' => $managerId,
            'client_id' => $clientId,
        ], $model);
    }

    /**
     * @param int|null $managerId
     * @param int|null $clientId
     * @return object|string
     */
    public function delete(int $managerId = null, int $clientId = null)
    {
        return $this->call('delete', [
            'manager_id' => $managerId,
            'client_id' => $clientId,
        ]);
    }
}

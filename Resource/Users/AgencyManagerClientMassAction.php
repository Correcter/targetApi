<?php

namespace TargetApi\Resource\Users;

use TargetApi\Model\Users\AgencyManagerClient as AgencyManagerClientModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class AgencyManagerClientMassAction extends AbstaractResource
{
    /**
     * @param null|int                 $managerId
     * @param AgencyManagerClientModel $model
     *
     * @return object|string
     */
    public function post(int $managerId = null, AgencyManagerClientModel $model)
    {
        return $this->call('post', [
            'manager_id' => $managerId,
        ], $model);
    }
}

<?php

namespace TargetApi\Resource\Users;

use TargetApi\Model\Users\AgencyManager as AgencyManagerModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class AgencyManagers extends AbstaractResource
{
    /**
     * @param int|null $limit
     * @param int|null $offset
     * @param string|null $managerUsername
     * @param string|null $managerUsernameIn
     * @return object|string
     */
    public function get(
        int $limit = null,
        int $offset = null,
        string $managerUsername = null,
        string $managerUsernameIn = null
    )
    {
        return $this->call('get', [
            'limit' => $limit,
            'offset' => $offset,
            '_manager__username' => $managerUsername,
            '_manager__username_in' => $managerUsernameIn,
        ]);
    }

    /**
     * @param AgencyManagerModel $model
     *
     * @return object|string
     */
    public function post(AgencyManagerModel $model)
    {
        return $this->call('post', [], $model);
    }
}

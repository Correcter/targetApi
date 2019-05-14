<?php

namespace TargetApi\Resource\Users;

use TargetApi\Model\Users\AgencyManagerClient as AgencyManagerClientModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class AgencyManagerClients extends AbstaractResource
{
    /**
     * @param null|int    $managerId
     * @param null|int    $limit
     * @param null|int    $offset
     * @param null|string $userUsername
     * @param null|string $userUsernameIn
     * @param null|string $status
     * @param null|string $statusNe
     * @param null|string $statusIn
     *
     * @return object|string
     */
    public function get(
        int $managerId = null,
        int $limit = null,
        int $offset = null,
        string $userUsername = null,
        string $userUsernameIn = null,
        string $status = null,
        string $statusNe = null,
        string $statusIn = null
    ) {
        return $this->call('get', [
            'manager_id' => $managerId,
            'limit' => $limit,
            'offset' => $offset,
            '_user__username' => $userUsername,
            '_user__username__in' => $userUsernameIn,
            '_status' => $status,
            '_status__ne' => $statusNe,
            '_status__in' => $statusIn,
        ]);
    }

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

    /**
     * @param null|int $managerId
     *
     * @return object|string
     */
    public function delete(int $managerId = null)
    {
        return $this->call('delete', [
            'manager_id' => $managerId,
        ]);
    }
}

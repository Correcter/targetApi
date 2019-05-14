<?php

namespace TargetApi\Resource\Users;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class ManagerClients extends AbstaractResource
{
    /**
     * @param null|int    $limit
     * @param null|int    $offset
     * @param null|string $uerUsername
     * @param null|string $userUsernameIn
     * @param null|string $status
     * @param null|string $statusNe
     * @param null|string $statusIn
     *
     * @return object|string
     */
    public function get(
        int $limit = null,
        int $offset = null,
        string $uerUsername = null,
        string $userUsernameIn = null,
        string $status = null,
        string $statusNe = null,
        string $statusIn = null
    ) {
        return $this->call('get', [
            'limit' => $limit,
            'offset' => $offset,
            '_user__username' => $uerUsername,
            '_user__username__in' => $userUsernameIn,
            '_status' => $status,
            '_status__ne' => $statusNe,
            '_status__in' => $statusIn,
        ]);
    }
}

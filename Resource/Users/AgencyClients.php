<?php

namespace TargetApi\Resource\Users;

use TargetApi\Model\Users\AgencyClient as AgencyClientModel;
use TargetApi\Resource\AbstaractResource;
use TargetApi\Types\ClientTypes;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class AgencyClients extends AbstaractResource
{
    /**
     * @param ClientTypes $types
     * @param bool        $validate
     *
     * @return object|string
     */
    public function get(ClientTypes $types, $validate = true)
    {
        return $this->call('get', [
            'limit' => $types->getLimit(),
            'offset' => $types->getOffset(),
            '_user__username' => $types->getUserUsername(),
            '_user__username__in' => $types->getUserUsernameIn(),
            '_status' => $types->getStatus(),
            '_status__ne' => $types->getStatusNe(),
            '_status__in' => $types->getStatusIn(),
        ], null, null, $validate);
    }

    /**
     * @param AgencyClientModel $model
     *
     * @return object|string
     */
    public function post(AgencyClientModel $model)
    {
        return $this->call('post', [], $model);
    }
}

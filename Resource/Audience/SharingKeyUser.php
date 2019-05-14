<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\SharingKeyUser as SharingKeyUserModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class SharingKeyUser extends AbstaractResource
{
    /**
     * @param string              $key
     * @param SharingKeyUserModel $model
     *
     * @return object|string
     */
    public function post(string $key = null, SharingKeyUserModel $model)
    {
        return $this->call('post', [
            'key' => $key,
        ], $model);
    }

    /**
     * @param null|string $key
     *
     * @return object|string
     */
    public function delete(string $key = null)
    {
        return $this->call('delete', [
            'key' => $key,
        ]);
    }
}

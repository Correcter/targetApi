<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingUsersList as RemarketingUsersListModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingUsersList extends AbstaractResource
{
    /**
     * @param null|int    $id
     *
     * @return object|string
     */
    public function get(int $id = null)
    {
        return $this->call('get', [
            'id' => $id,
        ]);
    }

    /**
     * @param null|int                $id
     * @param RemarketingUsersListModel $model
     *
     * @return object|string
     */
    public function post(int $id = null, RemarketingUsersListModel $model)
    {
        return $this->call('post', [
            'id' => $id,
        ], $model);
    }

    /**
     * @param null|int    $id
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

<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingUsersList as RemarketingUsersListModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingUsersLists extends AbstaractResource
{
    /**
     * @return object|string
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param RemarketingUsersListModel $model
     *
     * @return object|string
     */
    public function post(RemarketingUsersListModel $model)
    {
        return $this->call('post', [], $model);
    }
}

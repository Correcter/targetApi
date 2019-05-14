<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingVkGroup as RemarketingVkGroupModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingVkGroups extends AbstaractResource
{
    /**
     * @return object|\TargetApi\Resource\string
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param RemarketingVkGroupModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(RemarketingVkGroupModel $model)
    {
        return $this->call('post', [], $model);
    }
}

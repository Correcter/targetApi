<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingOkGroup as RemarketingOkGroupModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingOkGroups extends AbstaractResource
{
    /**
     * @return object|\TargetApi\Resource\string
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param RemarketingOkGroupModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(RemarketingOkGroupModel $model)
    {
        return $this->call('post', [], $model);
    }
}

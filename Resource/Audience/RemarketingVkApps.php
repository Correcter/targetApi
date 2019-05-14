<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingVkApp as RemarketingVkAppModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingVkApps extends AbstaractResource
{
    /**
     * @return object|\TargetApi\Resource\string
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param RemarketingVkAppModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(RemarketingVkAppModel $model)
    {
        return $this->call('post', [], $model);
    }
}

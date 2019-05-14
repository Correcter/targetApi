<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingMmApp as RemarketingMmAppModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingMmApps extends AbstaractResource
{
    /**
     * @return object|\TargetApi\Resource\string
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param RemarketingMmAppModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(RemarketingMmAppModel $model)
    {
        return $this->call('post', [], $model);
    }
}

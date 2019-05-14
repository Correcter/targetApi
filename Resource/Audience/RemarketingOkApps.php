<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingOkApp as RemarketingOkAppModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingOkApps extends AbstaractResource
{
    /**
     * @return object|\TargetApi\Resource\string
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param RemarketingOkAppModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(RemarketingOkAppModel $model)
    {
        return $this->call('post', [], $model);
    }
}

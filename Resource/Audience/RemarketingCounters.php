<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingCounter as RemarketingCounterModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingCounters extends AbstaractResource
{
    /**
     * @return \TargetApi\Resource\string|object
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param RemarketingCounterModel $model
     *
     * @return \TargetApi\Resource\string|object
     */
    public function post(RemarketingCounterModel $model)
    {
        return $this->call('post', [], $model);
    }
}

<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\LookalikeAudience as LookalikeAudienceModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class LookalikeAudiences extends AbstaractResource
{
    /**
     * @return \TargetApi\Resource\string|object
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param LookalikeAudienceModel $model
     *
     * @return \TargetApi\Resource\string|object
     */
    public function post(LookalikeAudienceModel $model)
    {
        return $this->call('post', [], $model);
    }
}

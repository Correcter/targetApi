<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\DmpRequest as DmpRequestModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class DmpRequest extends AbstaractResource
{
    /**
     * @param DmpRequestModel $model
     *
     * @return \TargetApi\Resource\string|object
     */
    public function post(DmpRequestModel $model)
    {
        return $this->call('post', [], $model);
    }
}

<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\GeoCoverage as GeoCoverageModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class GeoCoverage extends AbstaractResource
{
    /**
     * @param GeoCoverageModel $model
     *
     * @return object|string
     */
    public function post(GeoCoverageModel $model)
    {
        return $this->call('post', [], $model);
    }
}

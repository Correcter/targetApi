<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\ProjectionPrediction as ProjectionPredictionModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class ProjectionPrediction extends AbstaractResource
{
    /**
     * @param ProjectionPredictionModel $model
     *
     * @return object|string
     */
    public function post(ProjectionPredictionModel $model)
    {
        return $this->call('post', [], $model);
    }
}

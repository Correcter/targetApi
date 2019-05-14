<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\AuditPixelCheck as AuditPixelCheckModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class AuditPixelCheck extends AbstaractResource
{
    /**
     * @param AuditPixelCheckModel $model
     *
     * @return object|string
     */
    public function post($model)
    {
        return $this->call('post', [], $model);
    }
}

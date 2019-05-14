<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\BannerMassReplace as BannerMassReplaceModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class BannerMassReplace extends AbstaractResource
{
    /**
     * @param BannerMassReplaceModel $model
     *
     * @return object|string
     */
    public function post(BannerMassReplaceModel $model)
    {
        return $this->call('post', [], $model);
    }
}

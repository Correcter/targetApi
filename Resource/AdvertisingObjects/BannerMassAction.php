<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\BannerMassAction as BannerMassActionModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class BannerMassAction extends AbstaractResource
{
    /**
     * @param BannerMassActionModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(BannerMassActionModel $model)
    {
        return $this->call('post', [], $model);
    }
}

<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Resource\AbstaractResource;
use TargetApi\Model\AdvertisingObjects\BannerFormat as BannerFormatModel;


/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class BannerFormats extends AbstaractResource
{
    /**
     * @return object|\TargetApi\Resource\string
     */
    public function get(BannerFormatModel $model)
    {
        return $this->call('get', [], $model);
    }
}

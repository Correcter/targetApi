<?php

namespace TargetApi\Resource\PartnerPlatforms;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaly Dergunov <correcter@inbox.ru>
 */
class BannerTopics extends AbstaractResource
{
    /**
     * @return object|string
     */
    public function get()
    {
        return $this->call('get');
    }
}

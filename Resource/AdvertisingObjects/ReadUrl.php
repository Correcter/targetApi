<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class ReadUrl extends AbstaractResource
{
    /**
     * @param int $urlId
     *
     * @return object|string
     */
    public function get(int $urlId)
    {
        return $this->call('get', [
            'url_id' => $urlId,
        ]);
    }
}

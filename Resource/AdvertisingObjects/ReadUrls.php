<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class ReadUrls extends AbstaractResource
{
    /**
     * @param null|int $urlId1
     * @param null|int $urlId2
     * @param null|int $urlId3
     *
     * @return object|string
     */
    public function get(int $urlId1 = null, int $urlId2 = null, int $urlId3 = null)
    {
        return $this->call('get', [
            'url_id1' => $urlId1,
            'url_id2' => $urlId2,
            'url_id3' => $urlId3,
        ]);
    }
}

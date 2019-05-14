<?php

namespace TargetApi\Resource\Handbooks;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class UserGeo extends AbstaractResource
{
    /**
     * @param null|int    $limit
     * @param null|int    $offset
     * @param null|int    $_id
     * @param null|string $_id__in
     * @param null|string $_q
     *
     * @return object|string
     */
    public function get(
        int $limit = null,
        int $offset = null,
        int $_id = null,
        string $_id__in = null,
        string $_q = null
    ) {
        return $this->call('get', [
            'limit' => $limit,
            'offset' => $offset,
            '_id' => $_id,
            '_id__in' => $_id__in,
            '_q' => $_q,
        ]);
    }
}

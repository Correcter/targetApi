<?php

namespace TargetApi\Resource\Handbooks;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Region extends AbstaractResource
{
    /**
     * @param null|int    $_id
     * @param null|string $_id__in
     * @param null|int    $_parent_id
     * @param null|string $_parent_id__in
     * @param null|string $_q
     * @param null|string $_flags
     * @param null|string $_flags__in
     *
     * @return object|string
     */
    public function get(
        int $_id = null,
        string $_id__in = null,
        int $_parent_id = null,
        string $_parent_id__in = null,
        string $_q = null,
        string $_flags = null,
        string $_flags__in = null
    ) {
        return $this->call('get', [
            '_id' => $_id,
            '_id__in' => $_id__in,
            '_parent_id' => $_parent_id,
            '_parent_id__in' => $_parent_id__in,
            '_q' => $_q,
            '_flags' => $_flags,
            '_flags__in' => $_flags__in,
        ]);
    }
}

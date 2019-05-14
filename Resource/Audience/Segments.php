<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\Segment as SegmentModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Segments extends AbstaractResource
{
    /**
     * @param null|int    $limit
     * @param null|int    $offset
     * @param null|int    $_id
     * @param null|string $_id__in
     * @param null|string $_name
     * @param null|string $_name__startswith
     *
     * @return object|string
     */
    public function get(int $limit = null, int $offset = null, int $_id = null, string $_id__in = null, string $_name = null, string $_name__startswith = null)
    {
        return $this->call('get', [
            'limit' => $limit,
            'offset' => $offset,
            '_id' => $_id,
            '_id__in' => $_id__in,
            '_name' => $_name,
            '_name__startswith' => $_name__startswith,
        ]);
    }

    /**
     * @param SegmentModel $model
     *
     * @return object|string
     */
    public function post(SegmentModel $model)
    {
        return $this->call('post', [], $model);
    }
}

<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\Segment as SegmentModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Segment extends AbstaractResource
{
    /**
     * @return object|\TargetApi\Resource\string
     */
    public function get(int $id)
    {
        return $this->call('get', ['id' => $id]);
    }

    /**
     * @param int          $id
     * @param SegmentModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(int $id, SegmentModel $model)
    {
        return $this->call('post', ['id' => $id], $model);
    }

    /**
     * @param int $id
     *
     * @return object|\TargetApi\Resource\string
     */
    public function delete(int $id)
    {
        return $this->call('delete', ['id' => $id]);
    }
}

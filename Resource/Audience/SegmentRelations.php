<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\SegmentRelation as SegmentRelationsModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class SegmentRelations extends AbstaractResource
{
    /**
     * @param int    $segmentId
     * @param string $fields
     *
     * @return object|string
     */
    public function get(int $segmentId, string $fields)
    {
        return $this->call('get', [
            'segment_id' => $segmentId,
            'fields' => $fields,
        ]);
    }

    /**
     * @param int                   $segmentId
     * @param SegmentRelationsModel $model
     *
     * @return object|string
     */
    public function post(int $segmentId, SegmentRelationsModel $model)
    {
        return $this->call('post', [
            'segment_id' => $segmentId,
        ], $model);
    }
}

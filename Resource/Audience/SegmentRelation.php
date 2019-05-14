<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\SegmentRelation as SegmentRelationModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class SegmentRelation extends AbstaractResource
{
    /**
     * @param int                  $segmentId
     * @param int                  $id
     * @param SegmentRelationModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(int $segmentId, int $id, SegmentRelationModel $model)
    {
        return $this->call('post', [
            'segment_id' => $segmentId,
            'id' => $id,
        ], $model);
    }

    /**
     * @param int $segmentId
     * @param int $id
     *
     * @return object|\TargetApi\Resource\string
     */
    public function delete(int $segmentId, int $id)
    {
        return $this->call('delete', [
            'segment_id' => $segmentId,
            'id' => $id,
        ]);
    }
}

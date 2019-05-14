<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class SegmentRelationsDelete extends AbstaractResource
{
    /**
     * @param int $segmentId
     * @param int $id1
     * @param int $id2
     *
     * @return object|\TargetApi\Resource\string
     */
    public function delete(int $segmentId, int $id1, int $id2)
    {
        return $this->call('delete', [
            'segment_id' => $segmentId,
            'id1' => $id1,
            'id2' => $id2,
        ]);
    }
}

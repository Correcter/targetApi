<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaly Dergunov <correcter@inbox.ru>
 */
class AudienceScoreStats extends AbstaractResource
{
    /**
     * @param int $audienceId
     *
     * @return object|\TargetApi\Resource\string
     */
    public function get(int $audienceId)
    {
        return $this->call('get', [
            'audience_id' => $audienceId,
        ]);
    }
}

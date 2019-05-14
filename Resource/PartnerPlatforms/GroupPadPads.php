<?php

namespace TargetApi\Resource\PartnerPlatforms;

use TargetApi\Model\PartnerPlatforms\Pad as PadModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class GroupPadPads extends AbstaractResource
{
    /**
     * @param int      $groupPadId
     * @param PadModel $model
     *
     * @return object|string
     */
    public function post(int $groupPadId, PadModel $model)
    {
        return $this->call('post', [
            'group_pad_id' => $groupPadId,
        ], $model);
    }
}

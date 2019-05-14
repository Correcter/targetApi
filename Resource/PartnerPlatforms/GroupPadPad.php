<?php

namespace TargetApi\Resource\PartnerPlatforms;

use TargetApi\Model\PartnerPlatforms\Pad as PadModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class GroupPadPad extends AbstaractResource
{
    /**
     * @param null|int $groupPadId
     * @param null|int $id
     *
     * @return object|string
     */
    public function get(int $groupPadId, int $id)
    {
        return $this->call('get', [
            'group_pad_id' => $groupPadId,
            'id' => $id,
        ]);
    }

    /**
     * @param null|int $groupPadId
     * @param null|int $id
     * @param PadModel $model
     *
     * @return object|string
     */
    public function post(int $groupPadId, int $id, PadModel $model)
    {
        return $this->call('post', [
            'group_pad_id' => $groupPadId,
            'id' => $id,
        ], $model);
    }
}

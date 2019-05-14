<?php

namespace TargetApi\Resource\PartnerPlatforms;

use TargetApi\Model\PartnerPlatforms\GroupPad as GroupPadModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class GroupPadByIds extends AbstaractResource
{
    /**
     * @param int    $id1
     * @param int    $id2
     *
     * @return object|string
     */
    public function get(int $id1 = null, int $id2 = null)
    {
        return $this->call('get', [
            'id1' => $id1,
            'id2' => $id2,
        ]);
    }

    /**
     * @param GroupPadModel $model
     *
     * @return object|string
     */
    public function post(GroupPadModel $model)
    {
        return $this->call('post', [], $model);
    }
}

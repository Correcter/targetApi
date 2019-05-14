<?php

namespace TargetApi\Resource\PartnerPlatforms;

use TargetApi\Model\PartnerPlatforms\GroupPad as GroupPadModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class GroupPad extends AbstaractResource
{
    /**
     * @param int $id
     *
     * @return object|string
     */
    public function get(int $id)
    {
        return $this->call('get', [
            'id' => $id,
        ]);
    }

    /**
     * @param int           $id
     * @param GroupPadModel $model
     *
     * @return object|string
     */
    public function post(int $id, GroupPadModel $model)
    {
        return $this->call('post', [
            'id' => $id,
        ], $model);
    }
}

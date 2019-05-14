<?php

namespace TargetApi\Resource\PartnerPlatforms;

use TargetApi\Model\PartnerPlatforms\GroupPad as GroupPadModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class GroupPads extends AbstaractResource
{
    /**
     * @param int    $limit
     * @param int    $offset
     * @param string $fields
     *
     * @return object|string
     */
    public function get(int $limit = null, int $offset = null, string $fields = null)
    {
        return $this->call('get', [
            'limit' => $limit,
            'offset' => $offset,
            'fields' => $fields,
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

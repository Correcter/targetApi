<?php

namespace TargetApi\Resource\PartnerPlatforms;

use TargetApi\Model\PartnerPlatforms\Pad as PadModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Pad extends AbstaractResource
{
    /**
     * @param int $id
     *
     * @return object|string
     */
    public function get(int $id = null)
    {
        return $this->call('get', [
            'id' => $id,
        ]);
    }

    /**
     * @param null|int $id
     * @param PadModel $model
     *
     * @return object|string
     */
    public function post(int $id = null, PadModel $model)
    {
        return $this->call('post', [
            'id' => $id,
        ], $model);
    }
}

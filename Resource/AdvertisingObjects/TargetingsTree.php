<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\TargetingsTree as TargetingsTreeModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class TargetingsTree extends AbstaractResource
{
    /**
     * @param string $targetings
     * @param $model TargetingsTreeModel
     *
     * @return object|\TargetApi\Resource\string
     */
    public function get(string $targetings = null, TargetingsTreeModel $model)
    {
        return $this->call('get', [
            'targetings' => $targetings,
        ], $model);
    }
}

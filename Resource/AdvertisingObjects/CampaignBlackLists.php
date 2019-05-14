<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\BlackList as BlackListModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class CampaignBlackLists extends AbstaractResource
{
    /**
     * @param null|int $type
     *
     * @return object|string
     */
    public function get(int $type = null)
    {
        return $this->call('get', [
            'type' => $type,
        ]);
    }

    /**
     * @param BlackListModel $model
     *
     * @return object|string
     */
    public function post(BlackListModel $model)
    {
        return $this->call('post', [], $model);
    }
}

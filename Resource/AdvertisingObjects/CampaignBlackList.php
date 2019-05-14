<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\BlackList as BlackListModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class CampaignBlackList extends AbstaractResource
{
    /**
     * @param int|null $blacklistId
     * @param BlackListModel $model
     * @return object|string
     */
    public function post(int $blacklistId = null, BlackListModel $model)
    {
        return $this->call('post', [
            'blacklist_id' => $blacklistId,
        ], $model);
    }

    /**
     * @param int|null $blacklistId
     * @return object|string
     */
    public function delete(int $blacklistId = null)
    {
        return $this->call('delete', [
            'blacklist_id' => $blacklistId,
        ]);
    }
}

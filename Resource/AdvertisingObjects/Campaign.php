<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\Campaign as CampaignModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Campaign extends AbstaractResource
{
    /**
     * @param null|int $campaignId
     * @param null     $fields
     *
     * @return object|string
     */
    public function get(int $campaignId = null, $fields = null)
    {
        return $this->call('get', [
            'campaign_id' => $campaignId,
            'fields' => $fields,
        ]);
    }

    /**
     * @param int           $campaignId
     * @param CampaignModel $model
     *
     * @return object|string
     */
    public function post(int $campaignId, CampaignModel $model)
    {
        return $this->call('post', [
            'campaign_id' => $campaignId,
        ], $model);
    }

    /**
     * @param int $campaignId
     *
     * @return object|string
     */
    public function delete(int $campaignId)
    {
        return $this->call('delete', [
            'campaign_id' => $campaignId,
        ]);
    }
}

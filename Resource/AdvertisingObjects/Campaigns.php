<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\Campaign as CampaignModel;
use TargetApi\Resource\AbstaractResource;
use TargetApi\Types\CampaignsTypes;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Campaigns extends AbstaractResource
{
    /**
     * @param CampaignsTypes $campaigns
     * @param bool           $validate
     *
     * @return object|string
     */
    public function get(CampaignsTypes $campaigns, $validate = true)
    {
        return $this->call('get', [
            'fields' => $campaigns->getFields(),
            'limit' => $campaigns->getLimit(),
            'offset' => $campaigns->getOffset(),
            '_id' => $campaigns->getIds(),
            '_id__in' => $campaigns->getIdIn(),
            '_status' => $campaigns->getStatus(),
            '_status__ne' => $campaigns->getStatusNe(),
            '_status__in' => $campaigns->getStatusIn(),
            '_last_updated' => $campaigns->getLastUpdated(),
            '_last_updated__gt' => $campaigns->getLastUpdatedGt(),
            '_last_updated__gte' => $campaigns->getLastUpdatedGte(),
            '_last_updated__lt' => $campaigns->getLastUpdatedLt(),
            '_last_updated__lte' => $campaigns->getLastUpdatedLte(),
            'sorting' => $campaigns->getSorting(),
        ], null, null, $validate);
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

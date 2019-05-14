<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\Banner as BannerModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class CampaignBanners extends AbstaractResource
{
    /**
     * @param null $campaignId
     * @param BannerModel $model
     * @return object|string
     */
    public function post($campaignId = null, BannerModel $model)
    {
        return $this->call('post', [
            'campaign_id' => $campaignId
        ], $model);
    }
}
